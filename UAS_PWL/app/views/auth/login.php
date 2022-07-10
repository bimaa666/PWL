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
        <?= Flasher::flash() ?>
        <div class="row justify-content-center">
            <div class="col col-lg-8 col-md-6 col-sm-4">
                <div class="card">
                    <h5 class="card-header">Login</h5>
                    <div class="card-body">
                        <form action="<?= BASEURL ?>/login/cekLogin" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Jangan pernah beritahu email dan password anda ke orang lain</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        Belum punya akun? <a href="<?= BASEURL ?>/login/register">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= BASEURL ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>