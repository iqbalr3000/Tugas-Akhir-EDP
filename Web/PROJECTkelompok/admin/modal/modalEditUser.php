<?php
    $datatampil = mysqli_query($koneksi, "SELECT * from  tb_user");
    if (is_array($datatampil) || is_object($datatampil)){
        foreach ($datatampil as $row){
?>

<!-- Modal -->
<div class="modal fade" id="modalEditUser<?= $row['id']; ?>" tabindex="-1" aria-labelledby="modalEditUserLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditUserLabel">Edit User</h5>
      </div>
      <div class="modal-body">
        <form action="action/editUser.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan nama" value="<?= $row['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan username" value="<?= $row['username']; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan password" value="<?= $row['password']; ?>">
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

<?php
        }
      }
?>