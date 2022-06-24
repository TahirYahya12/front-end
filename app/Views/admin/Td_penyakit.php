<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data</h1>
    </div><br>
    <form method="post" action="/admin/savep">
        <div class="form-group">
            <label for="namaPenyakit">Nama_Penyakit</label>
            <input type="text" class="form-control" id="namaPenyakit" name="namaPenyakit">
        </div><br>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan">
        </div><br>
        <div class="form-group">
            <label for="solusi">Solusi</label>
            <textarea class="form-control" id="solusi" name="solusi" rows="3"></textarea>
        </div><br>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-warning">BATAL</button>
    </form>
</main>
<?= $this->endSection(); ?>