<?php

session_start();
if (isset($_SESSION['is_login'])) {
    if ($_SESSION['is_login']) {
        echo "<script>document.location.href='index.php?page=home'</script>";
    }
}

if (isset($_POST['submit'])) {
    include "./repositories/base.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = get("user", "*", "WHERE (email = '$email' AND peran='administrator')  LIMIT 1");
    if (mysqli_num_rows($data)) {
        $data = mysqli_fetch_assoc($data);
        if (password_verify($password, $data['password']) == true) {
            $_SESSION['is_login'] = true;
            echo "<script>alert('Login Berhasil')</script>";
            echo "<script>document.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Kredensial tidak ditemukan')</script>";
            echo "<script>document.location.href='login.php'</script>";
        }
    } else {
        echo "<script>alert('Kredensial tidak ditemukan 2')</script>";
        echo "<script>document.location.href='login.php'</script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>pwl</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Toko ABC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=home">Home</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="container pt-3">
        <div class="row mt-5">
            <div class="col-md-4 offset-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <h5 class="card-header">Login</h5>
                            <div class="card-body">
                                <form action="" method="POST">

                                    <div class="form-group">
                                        <label for="email">Username</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" name="password" id="password">
                                    </div>
                                    <input type="submit" value="Login" name="submit" class="btn btn-primary btn-sm mt-3">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>