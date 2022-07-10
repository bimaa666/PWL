<div class="container mt-5">
<?php Flasher::flash() ?>
    <div class="row">
        <div class="col col-md-4">
            <img src="<?= BASEURL ?>/img/<?= $data->film->gambar ?>.jpg" alt="<?= $data->film->judul_film ?>">
        </div>
        <div class="col col-md-6">
            <form action="<?= BASEURL ?>/order/booking" method="post" class="row g-3 needs-validation">
                <input type="hidden" name="judul_film" value="<?= $data->film->judul_film ?>">
                <div class="mb-3">
                    <label for="tanggal_penayangan" class="form-label">Tanggal Penayangan</label>
                    <select name="tanggal_penayangan" class="form-select" id="tanggal_penayangan">
                        <option selected>-- PILIH TANGGAL PENAYANGAN --</option>
                        <?php foreach($data->schedules as $schedule): ?>
                            <option value="<?= $schedule->id_schedule ?>"><?= $schedule->tanggal_penayangan; ?></option>
                        <?php endforeach; ?>
                   </select>
                   <input name="nama_ruang" type="text" class="form-text" id="nama_ruang" readonly>
                </div>
                <div class="mb-3">
                    <label for="nomor_kursi" class="form-label">Nomor Kursi</label>
                    <select name="nomor_kursi" class="form-select" id="nomor_kursi">
                        <option selected>-- PILIH NOMOR KURSI --</option>  
                   </select>
                   <div class="form-text" id="nama_ruang"></div>
                </div>
                <button type="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
    onload = ()=>{
        const tanggal_penayangan = document.getElementById("tanggal_penayangan");
        const nama_ruang = document.getElementById("nama_ruang");
        const nomor_kursi = document.getElementById("nomor_kursi");

        tanggal_penayangan.addEventListener("change", function(){
            fetch(`<?= BASEURL ?>/room/getRoom/${this.value}`)
                .then(result => result.json())
                .then(data => {
                    nama_ruang.value = data[0].nama_ruang;
                    let el = "";
                    el += "<option selected>-- PILIH NOMOR KURSI --</option>";
                    // nomor_kursi = []
                    data.forEach(element => {
                        el += `<option value="${element.id_seat_list}">${element.nomor_kursi}</option>`;
                    } );
                    nomor_kursi.innerHTML = el;
                    


                });
        })
    }
</script>