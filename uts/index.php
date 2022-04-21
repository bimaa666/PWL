<?php
session_start();
if (isset($_GET['page'])) {
    $p = $_GET['page'];
} else {
    $p = '';
}
if ($p != "home" and $p != "") {
    if (isset($_SESSION['is_login'])) {
        if (!$_SESSION['is_login']) {
            echo "<script>document.location.href='login.php'</script>";
        }
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

    <title>PWL</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WELCOME TO ABC TOKO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=home">Home</a>
                    </li>
                    <?php
                    if (isset($_SESSION['is_login'])) {
                        if ($_SESSION['is_login']) {
                    ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=user">User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=pelanggan">Pelanggan</a>
                            </li>
                    <?php }
                    } ?>

                </ul>
                <?php
                if (isset($_SESSION['is_login'])) {
                    if ($_SESSION['is_login']) {
                ?>
                        <a href="logout.php" class="btn btn-outline-success" type="submit">Logout</a>
                    <?php } else { ?>
                        <a href="login.php" class="btn btn-outline-success" type="submit">Login</a>
                    <?php } ?>
                <?php } else { ?>
                    <a href="login.php" class="btn btn-outline-success" type="submit">Login</a>
                <?php } ?>

            </div>
        </div>
    </nav>

    <div class="container pt-3">
        <?php
        if (empty($_GET['page'])) {
            echo "<script>document.location.href='index.php?page=home'</script>";
        } else {
            $p = $_GET['page'];
            if ($p != "home") {
                if (isset($_SESSION['is_login'])) {
                }
            }
            include "pages/$p.php";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>