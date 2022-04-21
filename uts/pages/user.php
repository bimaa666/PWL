<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Data User</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="index.php?page=add-user" class="btn btn-primary btn-sm mb-2">Tambah User</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>HP</th>
                                    <th>Peran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include("./repositories/base.php") ?>
                                <?php foreach (get("user", "*", "WHERE peran = 'administrator'") as $index => $row) :  ?>
                                    <tr>
                                        <td align="center"><?= $index + 1 ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['telp'] ?></td>
                                        <td><?= ucfirst($row['peran']) ?></td>
                                        <td>
                                            <a href="index.php?page=edit-user&id=<?= $row['kode_user'] ?>" class="btn btn-success btn-sm text-white">Edit</a>
                                            <a href="index.php?page=delete-user&id=<?= $row['kode_user'] ?>" class="btn btn-danger btn-sm text-white">Hapus</a>
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