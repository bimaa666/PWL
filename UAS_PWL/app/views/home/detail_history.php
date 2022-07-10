<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail History</title>
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.min.css">
  </head>
  <body class="p-1">
    <div class="p-3 border border-dark" style="width: 40vw">
        <h3 class="text-center">Open Cinema</h3>
        <hr>
        <dl class="row">
            <dt class="col-sm-3">Judul Film</dt>
            <dd class="col-sm-9"><?= $data->order->nama_film; ?></dd>

            <dt class="col-sm-3">Tanggal Penayangan</dt>
            <dd class="col-sm-9"><?= $data->order->tanggal_penayangan; ?></dd>

            <dt class="col-sm-3">Ruang</dt>
            <dd class="col-sm-9"><?= $data->order->nama_ruang; ?></dd>

            <dt class="col-sm-3">Nomor Kursi</dt>
            <dd class="col-sm-9"><?= $data->order->nomor_kursi; ?></dd>
        </dl>
        <hr>
        <div class="footer text-start">
            <p class="small"><?= $data->order->tanggal_pemesanan; ?></p>
        </div>
    </div>
    <script>window.print()</script>
  </body>
</html>