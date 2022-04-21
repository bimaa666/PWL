<?php
include("./repositories/base.php");
$pelanggan = find("pelanggan", "INNER JOIN user ON pelanggan.kode_user = user.kode_user WHERE kode_pelanggan = $_GET[id]");
$pelanggan = mysqli_fetch_assoc($pelanggan);

if (isset($_POST['submit'])) {
    include "./services/pelanggan.php";
    if (updateService($_POST, $_GET['id'])) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=pelanggan'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=pelanggan'</script>";
    }
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Edit Pelanggan</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama" required value="<?= $pelanggan['nama'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required value="<?= $pelanggan['email'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telp">Telp</label>
                                        <input type="text" class="form-control" name="telp" id="telp" required value="<?= $pelanggan['telp'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" required value="<?= $pelanggan['alamat'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password">
                                        <p>* Kosongkan password jika tidak ingin mengganti password</p>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary btn-sm mt-2" name="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>