<?php
    $datatampil = mysqli_query($koneksi, "SELECT * from  tb_tol");
    if (is_array($datatampil) || is_object($datatampil)){
        foreach ($datatampil as $row){
?>

<!-- Modal -->
<div class="modal fade" id="modalEditTol<?= $row['id']; ?>" tabindex="-1" aria-labelledby="modalEditTolLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditTolLabel">Edit TOl</h5>
      </div>
      <div class="modal-body">
        <form action="action/editTol.php" method="post">
          <input type="hidden" name="id" value="<?= $row['id']; ?>">
          <div class="form-group">
              <label for="nama_tol">Nama TOl</label>
              <input type="text" name="nama_tol" class="form-control" placeholder="Masukan nama tol" value="<?= $row['nama_tol']; ?>">
          </div>
          <div class="form-group">
              <label for="harga">Tarif</label>
              <input type="number" name="harga" class="form-control" placeholder="Masukan tarif" value="<?= $row['harga']; ?>">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" name="submit" value="Save">
      </div>
      </form>
    </div>
  </div>
</div>

<?php
        }
      }
?>