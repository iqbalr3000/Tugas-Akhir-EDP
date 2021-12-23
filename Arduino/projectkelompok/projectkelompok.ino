#include <SPI.h>
#include <Ethernet.h>
#include <ArduinoJson.h> //6.17.3
#include <MFRC522.h>
#include <Servo.h>

// replace the MAC address below by the MAC address printed on a sticker on the Arduino Shield 2
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };

EthernetClient client;

int    HTTP_PORT   = 80;
String HTTP_METHOD = "GET";
char   HOST_NAME[] = "192.168.0.104"; // change to your PC's IP address
String PATH_NAME   = "/PROJECTkelompok/api.php";

String getData;

//variable rfid
#define SS_PIN 9
#define RST_PIN 8
MFRC522 mfrc522(SS_PIN, RST_PIN);   // Create MFRC522 instance.

//variable servo
int outServo = 6;
Servo myServo;

//variable tambahan
int buzzer = 7;
int key = 0;
int key2 = 0;
int infrared = 5;

//variabel led
int R = 2;
int Y = 3;
int G = 4;

void setup() {
  Serial.begin(115200);

  myServo.attach(outServo);

  pinMode (buzzer, OUTPUT);
  pinMode (R, OUTPUT);
  pinMode (Y, OUTPUT);
  pinMode (G, OUTPUT);
  pinMode (infrared, INPUT);

  myServo.write(90);
  digitalWrite(R, HIGH);
  digitalWrite(Y, LOW);
  digitalWrite(G, LOW);

  digitalWrite(buzzer, HIGH);
  delay(100);
  digitalWrite(buzzer, LOW);

  while (!Serial);
  // Initiate  SPI bus
  SPI.begin();
  // Initiate MFRC522
  mfrc522.PCD_Init();
  //START IP DHCP
  Serial.println("Konfigurasi DHCP, Silahkan Tunggu!");
  if (Ethernet.begin(mac) == 0) {
    Serial.println("DHCP Gagal!");
    if (Ethernet.hardwareStatus() == EthernetNoHardware) {
      Serial.println("Ethernet Tidak tereteksi :(");
    } else if (Ethernet.linkStatus() == LinkOFF) {
      Serial.println("Hubungkan kabel Ethernet!");
    }
    while (true) {
      delay(1);
    }
  }
  //End DHCP
  delay(5000);
  Serial.print("IP address: ");
  Serial.println(Ethernet.localIP());
  client.connect(HOST_NAME, HTTP_PORT);
  Serial.println("Siap Digunakan!");
}

void loop() {
  if (key == 0) {

    //Baca data
    //Program yang akan dijalankan berulang-ulang
    if ( ! mfrc522.PICC_IsNewCardPresent()) {
      return;
    }
    // Select one of the cards
    if ( ! mfrc522.PICC_ReadCardSerial()) {
      return;
    }

    //Show UID on serial monitor
    Serial.print("UID tag :");
    String uidString;
    byte letter;
    for (byte i = 0; i < mfrc522.uid.size; i++)
    {
      uidString.concat(String(mfrc522.uid.uidByte[i] < 0x10 ? "" : ""));
      uidString.concat(String(mfrc522.uid.uidByte[i], HEX));
    }
    Serial.print("Message : ");
    uidString.toUpperCase();
    Serial.println(uidString);
    digitalWrite(buzzer, HIGH);
    delay(100);
    digitalWrite(buzzer, LOW);

    String nama_tol = "bogor";

    //POST TO WEB
    client.connect(HOST_NAME, HTTP_PORT);
    client.println(HTTP_METHOD + " " + PATH_NAME +
                   "?rfid=" + String(uidString) +
                   "&nama_tol=" + String(nama_tol) +

                   " HTTP/1.1");
    client.println("Host: " + String(HOST_NAME));
    client.println("Connection: close");
    client.println(); // end HTTP header

    while (client.connected()) {
      if (client.available()) {
        char endOfHeaders[] = "\r\n\r\n";
        client.find(endOfHeaders);
        getData = client.readString();
        getData.trim();

        //AMBIL DATA JSON
        const size_t capacity = JSON_OBJECT_SIZE(9) + 210; //cari dulu nilainya pakai Arduino Json 5 Asisten
        DynamicJsonDocument doc(capacity);
        //StaticJsonDocument<192> doc;
        DeserializationError error = deserializeJson(doc, getData);

        const char* id_dibaca       = doc["id"];
        const char* rfid_dibaca     = doc["rfid"];
        const char* nama_dibaca     = doc["nama"];
        const char* alamat_dibaca   = doc["alamat"];
        const char* telepon_dibaca  = doc["telepon"];
        const char* tanggal_dibaca  = doc["tanggal"];
        const char* saldo_dibaca    = doc["saldo"];
        const char* namatol_dibaca  = doc["nama_tol"];
        const char* status_dibaca   = doc["status"];

        //LOGIKA
        if (String(status_dibaca) == "Berhasil") {
          buzzeroke();
          Serial.println("Berhasil");
          delay(500);
          digitalWrite(R, LOW);
          digitalWrite(Y, HIGH);
          digitalWrite(G, LOW);
          delay(1000);
          bukaGerbang();
          digitalWrite(R, LOW);
          digitalWrite(Y, LOW);
          digitalWrite(G, HIGH);
          delay(500);
          key = 1;
        } else if (String(status_dibaca) == "Gagal") {
          buzzergagal();
          Serial.println("Saldo Tidak Cukup");
        } else {
          buzzergagal();
          Serial.println("Gagal");
        }

      }
    }
    //delay(1000);
  }

  InfraredON();
}

void buzzeroke() {
  digitalWrite(buzzer, HIGH);
  delay(100);
  digitalWrite(buzzer, LOW);
  delay(100);
  digitalWrite(buzzer, HIGH);
  delay(100);
  digitalWrite(buzzer, LOW);
  delay(100);
}

void buzzergagal() {
  digitalWrite(buzzer, HIGH);
  delay(1000);
  digitalWrite(buzzer, LOW);
  delay(10);
}

void bukaGerbang() {
  myServo.write(10);
}

void tutupGerbang() {
  myServo.write(90);
}

void InfraredON() {
  int readInfrared = digitalRead(infrared);

  if (readInfrared == 0 && key == 1) {
    digitalWrite(R, LOW);
    digitalWrite(Y, HIGH);
    digitalWrite(G, LOW);
    delay(1000);
    key2 = 1;
  }

  if ( readInfrared == 1 && key2 == 1) {
    delay(1000);
    tutupGerbang();
    digitalWrite(R, HIGH);
    digitalWrite(Y, LOW);
    digitalWrite(G, LOW);
    key = 0;
    key2 = 0;
  }
}
