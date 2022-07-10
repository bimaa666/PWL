<section>
    <div class="container mt-5 data">
        <h2>Tambah Data Admin</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/admin/tambahAdmin" method="POST">
              <div class="form-group">
                <label for="username">Uaername</label>
                <input name="username" type="text" class="form-control" id="username" placeholder="Masukan Username.." required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Masukan paswword.." required>
              </div>
              <div class="form-group">
                    <label for="karyawan">Karyawan</label>
                    <select name="id_karyawan" class="form-control" id="karyawan">
                       <?php foreach($data["karyawan"] as $karyawan): ?>
                          <option value="<?= $karyawan["id_karyawan"] ?>"><?= $karyawan["nama_karyawan"] ?></option>
                       <?php endforeach ?>
                   </select>
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>