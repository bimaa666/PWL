<?php
if (isset($_POST['submit'])) {
    include "./services/pelanggan.php";
    if (createService($_POST)) {
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
            <h5 class="card-header">Tambah Pelanggan</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telp">Telp</label>
                                        <input type="text" class="form-control" name="telp" id="telp" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" required>
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