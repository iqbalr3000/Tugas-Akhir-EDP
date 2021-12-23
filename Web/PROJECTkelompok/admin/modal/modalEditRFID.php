<?php
    $datatampil = mysqli_query($koneksi, "SELECT * from  tb_rfid");
    if (is_array($datatampil) || is_object($datatampil)){
        foreach ($datatampil as $row){
?>

<!-- Modal -->
<div class="modal fade" id="modalEditRFID<?= $row['id']; ?>" tabindex="-1" aria-labelledby="modalEditRFIDLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditRFIDLabel">Edit RFID</h5>
      </div>
      <div class="modal-body">
        <form action="action/editRFID.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <div class="form-group">
                <label for="rfid">ID Kartu RFID</label>
                <input type="text" name="rfid" class="form-control" placeholder="Masukan Id kartu" value="<?= $row['rfid']; ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan nama" value="<?= $row['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" cols="30" rows="3" class="form-control" placeholder="Masukan alamat"><?= $row['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="text" name="no_telp" class="form-control" placeholder="Masukan Nomor Telpon" value="<?= $row['no_telp']; ?>">
            </div>
            <div class="form-group">
                <label for="saldo">Saldo</label>
                <input type="number" name="saldo" class="form-control" placeholder="Masukan saldo" value="<?= $row['saldo']; ?>">
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

<?php
        }
    }
?>