<div class="container">
    <div class="card mb-3 mt-5">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="<?= BASEURL ?>/img/<?= $data->film->gambar ?>.jpg" class="img-fluid rounded-start" alt="<?= $data->film->judul_film ?>">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h4 class="card-title"><?= $data->film->judul_film ?></h4>
            <dl class="row">
                <dt class="col-sm-3">Genre</dt>
                <dd class="col-sm-9"><?= $data->film->genre ?></dd>

                <dt class="col-sm-3">Penulis</dt>
                <dd class="col-sm-9"><?= $data->film->penulis ?></dd>

                <dt class="col-sm-3">Tahun Rilis</dt>
                <dd class="col-sm-9"><?= $data->film->tahun ?></dd>

                <dt class="col-sm-3">Durasi</dt>
                <dd class="col-sm-9"><?= $data->film->durasi ?> menit</dd>

                <dt class="col-sm-3">Sinopsis</dt>
                <dd class="col-sm-9"><?= $data->film->sinopsis ?></dd>
            </dl>

            <a href="<?= BASEURL ?>/order/film/<?= $data->film->id_film ?>" class="btn btn-warning">Booking</a>
        </div>
        </div>
    </div>
    </div>
</div>