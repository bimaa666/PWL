<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data->title ?></title>
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container mt-5">
        <?php Flasher::flash() ?>
        <div class="row justify-content-center">
            <div class="col col-lg-8">
                <div class="card">
                    <h5 class="card-header">Register</h5>
                    <div class="card-body">
                        <form action="<?= BASEURL ?>/login/cekRegister" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input name="username" type="text" class="form-control" id="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomor_telp" class="form-label">Nomor Handphone</label>
                                <input name="nomor_telp" type="tel" class="form-control" id="nomor_telp">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        Sudah memiliki akun? <a href="<?= BASEURL ?>/login">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= BASEURL ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>