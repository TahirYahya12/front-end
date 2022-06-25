<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tabel Gejala</h1>
    </div><br>
    <a href="/gejala/tambah" class="btn btn-primary">Tambah Data</a><br><br>
    <table class="table table-bordered table-light">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Gejala</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($gejala as $g) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $g['nama_gejala']; ?></td>
                    <td><a href="/gejala/edit/<?= $g['id']; ?>" class="btn btn-success">Edit</a> <a href="/gejala/delete/<?= $g['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin ?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?= $this->endSection(); ?>