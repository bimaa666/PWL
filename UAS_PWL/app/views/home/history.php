<div class="container mt-3">
    <?php Flasher::flash() ?>
    <h1>History</h1>
    <div class="list-group mt-3">
        <?php foreach($data->orders as $order): ?>
        <a href="<?= BASEURL; ?>/order/detail_history/<?= $order->id_order; ?>" class="list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?= $order->nama_film; ?></h5>
                <small>Tayang <?= $order->tanggal_penayangan; ?></small>
            </div>
            <p class="mb-1"><?= $order->nama_ruang; ?></p>
            <p class="mb-1">Nomor Kursi : <?= $order->nomor_kursi; ?></p>
            <small>Tanggal pesan : <?= $order->tanggal_pemesanan; ?></small>
        </a>
    <?php endforeach; ?>
    </div>
</div>