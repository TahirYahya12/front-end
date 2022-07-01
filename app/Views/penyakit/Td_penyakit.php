<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data</h1>
    </div><br>
    <form method="post" action="/penyakit/save" enctype="multipart/form-data">
        <div class="form-group">
            <label for="kodePenyakit">Kode_Penyakit</label>
            <input type="text" class="form-control" id="kodePenyakit" name="kodePenyakit" autocomplete="off" placeholder="P1-P7">
        </div><br>
        <div class="form-group">
            <label for="namaPenyakit">Nama_Penyakit</label>
            <input type="text" class="form-control" id="namaPenyakit" name="namaPenyakit" autocomplete="off">
        </div><br>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" autocomplete="off">
        </div><br>
        <div class="form-group">
            <label for="solusi">Solusi</label>
            <textarea class="form-control" id="solusi" name="solusi" rows="3" autocomplete="off"><pre></pre></textarea>
        </div><br>
        <form>
            <div class="form-group">
                <input type="file" class="form-control-file" id="gPenyakit" name="gPenyakit">
            </div>
        </form><br>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <a class="btn btn-primary" href="/penyakit" role="button">KEMBALI</a>
    </form>
</main>
<?= $this->endSection(); ?>