<!-- Modal -->
<div class="modal fade" id="modalTambahTol" tabindex="-1" aria-labelledby="modalTambahTolLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahTolLabel">Daftarkan TOl</h5>
      </div>
      <div class="modal-body">
        <form action="action/tambahTol.php" method="post">
          <div class="form-group">
              <label for="nama_tol">Nama TOl</label>
              <input type="text" name="nama_tol" class="form-control" placeholder="Masukan nama tol">
          </div>
          <div class="form-group">
              <label for="harga">Tarif</label>
              <input type="number" name="harga" class="form-control" placeholder="Masukan tarif">
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