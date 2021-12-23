<!-- Modal -->
<div class="modal fade" id="modalTambahUser" tabindex="-1" aria-labelledby="modalTambahUserLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahUserLabel">Daftarkan User</h5>
      </div>
      <div class="modal-body">
        <form action="action/tambahUser.php" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan nama">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan password">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" class="form-control">
                  <option>---  Pilih Role  ---</option>
                  <option value="user">User</option>
                  <option value="admin">Admin</option>
                </select>
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