<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Data Pelanggan</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="index.php?page=add-pelanggan" class="btn btn-primary btn-sm mb-2">Tambah Pelanggan</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>HP</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include("./repositories/base.php") ?>
                                <?php
                                foreach (get("pelanggan", "pelanggan.*, user.email", "INNER JOIN user ON pelanggan.kode_user = user.kode_user") as $index => $row) :  ?>
                                    <tr>
                                        <td align="center"><?= $index + 1 ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['telp'] ?></td>
                                        <td><?= $row['alamat'] ?></td>
                                        <td>
                                            <a href="index.php?page=edit-pelanggan&id=<?= $row['kode_pelanggan'] ?>" class="btn btn-success btn-sm text-white">Edit</a>
                                            <a href="index.php?page=delete-pelanggan&id=<?= $row['kode_pelanggan'] ?>" class="btn btn-danger btn-sm text-white">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>