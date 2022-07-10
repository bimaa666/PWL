<div class="container">
    <?php Flasher::flash() ?>
    <h2 class="mt-4">Daftar Film Yang Tersedia</h2>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($data->films as $film): ?>
            <div class="col">
                <div class="card">
                    <img src="<?= BASEURL ?>/img/<?= $film->gambar ?>.jpg" class="card-img-top" alt="<?= $film->judul_film ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $film->judul_film ?></h5>
                        <a href="<?= BASEURL ?>/home/film/<?= $film->id_film ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<div class="mt-5 p-3 mb-2 bg-light text-dark text-center">
    <h6>Copyright&#169;2022</h6>
</div>