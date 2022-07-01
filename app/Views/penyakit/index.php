<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tabel Penyakit</h1>
    </div><br>
    <a href="/penyakit/tambah" class="btn btn-primary">Tambah Data</a><br><br>
    <table class="table table-bordered table-light">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Penyakit</th>
                <th scope="col">Gambar</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Solusi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($penyakit as $p) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $p['nama_penyakit']; ?></td>
                    <td><?= $p['gambar']; ?></td>
                    <td><?= $p['keterangan']; ?></td>
                    <td><?= $p['solusi']; ?></td>
                    <td><a class="btn btn-warning brn-sm d-inline" href="/penyakit/edit/<?= $p['id']; ?>" role="button">Edit</a>&nbsp;<a class="btn btn-danger brn-sm d-inline" href="/penyakit/delete/<?= $p['id']; ?>" role="button" onclick="return confirm('yakin ?');">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?= $this->endSection(); ?>