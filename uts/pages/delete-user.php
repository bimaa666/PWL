<?php
include "./services/user.php";
if (deleteService($_GET['id'])) {
    echo "<script>alert('Data Berhasil Dihapus')</script>";
    echo "<script>document.location.href='index.php?page=user'</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus')</script>";
    echo "<script>document.location.href='index.php?page=user'</script>";
}
