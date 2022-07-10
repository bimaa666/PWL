<section>
    <div class="container mt-5 data">
        <h2>Tambah Data Admin</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/admin/editAdmin" method="POST">
            <input type="hidden" name="id_admin" value="<?= $data["admin"]["id_admin"] ?>" >
              <div class="form-group">
                <label for="username">Uaername</label>
                <input value="<?= $data["admin"]["username"] ?>" name="username" type="text" class="form-control" id="username" placeholder="Masukan Username.." required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input value="<?= $data["admin"]["password"] ?>" name="password" type="password" class="form-control" id="password" placeholder="Masukan paswword.." required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>