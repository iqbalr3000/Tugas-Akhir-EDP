<?php
  $data = mysqli_query($koneksi, "SELECT * FROM tb_monitoring");
	$row  = mysqli_fetch_array($data);
  $rfid = $row['rfid'];

  $jumlahrfid = mysqli_query($koneksi, "SELECT * FROM tb_rfid WHERE rfid = '$rfid' ");
  $cek = mysqli_num_rows($jumlahrfid);

  if($cek == 0){
    $nilai = $rfid;
  }else{
    $nilai = null;
  }
?>

<!-- Modal -->
<div class="modal fade" id="modalTambahRFID" tabindex="-1" aria-labelledby="modalTambahRFIDLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahRFIDLabel">Daftarkan RFID</h5>
      </div>
      <div class="modal-body">
        <form action="action/tambahRFID.php" method="post">
            <div class="form-group">
                <label for="rfid">ID Kartu RFID</label>
                <input type="text" name="rfid" class="form-control" placeholder="Masukan Id kartu" value="<?= $nilai; ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" cols="30" rows="3" class="form-control" placeholder="Masukan alamat"></textarea>
            </div>
            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="text" name="no_telp" class="form-control" placeholder="Masukan Nomor Telpon">
            </div>
            <div class="form-group">
                <label for="saldo">Saldo</label>
                <input type="number" name="saldo" class="form-control" placeholder="Masukan saldo">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" name="submit" value="Save">
        </form>
      </div>
    </div>
  </div>
</div>