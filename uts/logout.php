<?php

session_start();
if (isset($_SESSION['is_login'])) {
    if ($_SESSION['is_login']) {
        session_destroy();
        session_unset();
        echo "<script>alert('Logout Berhasil')</script>";
        echo "<script>document.location.href='index.php?page=home'</script>";
    } else {
        echo "<script>alert('Login Berhasil')</script>";
        echo "<script>document.location.href='index.php?page=home'</script>";
    }
}
