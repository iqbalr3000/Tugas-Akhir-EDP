<?php
    require "koneksi.php";

    $rfid = $_GET['rfid'];
    $nama_tol = $_GET['nama_tol'];
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date('y-m-d G:i:s');

    $log = "UPDATE tb_monitoring SET tanggal = '$tanggal', rfid = '$rfid', nama_tol = '$nama_tol', status = 'Tidak Terdaftar' ";
    $koneksi->query($log);

    $jumlahrfid = mysqli_query($koneksi, "SELECT * FROM tb_rfid WHERE rfid = '$rfid' ");
    $cek = mysqli_num_rows($jumlahrfid);

    if($cek > 0){

        $datatol = mysqli_query($koneksi, "SELECT * FROM tb_tol WHERE nama_tol = '$nama_tol'");
		$rowtol  = mysqli_fetch_array($datatol);

		$datarfid = mysqli_query($koneksi, "SELECT * FROM tb_rfid WHERE rfid = '$rfid'");
		$rowrfid  = mysqli_fetch_array($datarfid);

		$saldoakhir = $rowrfid['saldo'] - $rowtol['harga'];

        if($rowrfid['saldo'] >= $rowtol['harga']){

            $sql = "UPDATE tb_monitoring SET tanggal = '$tanggal', rfid	= '$rfid', nama_tol = '$nama_tol', status = 'Berhasil' ";
			$koneksi->query($sql);

			$sqlsave = "INSERT INTO tb_log (tanggal, rfid, nama_tol, saldo_awal, bayar, saldo_akhir) VALUES ('" . $tanggal . "', '" . $rfid . "', '" . $nama_tol . "', '" . $rowrfid['saldo'] . "', '" . $rowtol['harga'] . "', '" . $saldoakhir . "')";
			$koneksi->query($sqlsave);

			$sqlsaldo = "UPDATE tb_rfid SET saldo = '$saldoakhir' WHERE rfid = '$rfid'";
			$koneksi->query($sqlsaldo);

		}else{
			//update status pada tb_monitoring menjadi gagal
			$sql = "UPDATE tb_monitoring SET tanggal = '$tanggal', rfid	= '$rfid', nama_tol = '$nama_tol', status = 'Gagal' ";
			$koneksi->query($sql);
		}

        $response = query("SELECT * FROM tb_rfid,tb_monitoring WHERE tb_rfid.rfid='$rfid'" )[0];
		$result = json_encode($response);
		echo $result;
    }
?>