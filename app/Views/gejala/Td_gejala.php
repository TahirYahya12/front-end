<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Gejala</h1>
    </div><br>
    <form method="post" action="/gejala/save">
        <div class="form-group mb-4">
            <label for="namaGejala">Nama_Gejala</label>
            <input type="text" class="form-control" id="namaGejala" name="namaGejala" autocomplete="off" autofocus>
            <label for="kodeGejala">Kode_Gejala</label>
            <input type="text" class="form-control" id="kodeGejala" name="kodeGejala" autocomplete="off" autofocus>
        </div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <a class="btn btn-primary" href="/gejala" role="button">CENCLE</a>
    </form>
</main>
<?= $this->endSection(); ?>