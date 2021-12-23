<?php
    $datatampil = mysqli_query($koneksi, "SELECT * from  tb_rfid");
    if (is_array($datatampil) || is_object($datatampil)){
        foreach ($datatampil as $row){
?>

<!-- Modal -->
<div class="modal fade" id="modalTambahSaldo<?= $row['id']; ?>" tabindex="-1" aria-labelledby="modalEditRFIDLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditRFIDLabel">Tambah Saldo</h5>
      </div>
      <div class="modal-body">
        <form action="action/tambahSaldo.php" method="post">
            <div class="form-group">
                <label for="rfid">ID Kartu RFID</label>
                <input type="text" name="rfid" class="form-control" placeholder="Masukan Id kartu" value="<?= $row['rfid']; ?>" readonly>
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

<?php
        }
    }
?>