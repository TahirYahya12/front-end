<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/coba.css">
    <title>Halaman | Gejala</title>
</head>

<body><br><br><br>
    <div class="container">
        <header class="header">
            <a href="/" class="logo">
                <img src="/img/logo3.png" alt="">
            </a>
            <div class="navbar">
                <a href="/">Home</a>
                <a href="/home/tanaman">Artikel</a>
                <a href="/home/bantuan">Bantuan</a>
                <!-- <a href="/home/tentang">Tentang</a> -->
            </div>
            <div class="icons">
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>
        </header>
        <br><br><br><br><br><br><br><br><br><br>
        <div class="card mb-1" style="max-width: 100%;">
            <h3>Silahkan pilih gejaja penyakit</h3>
            <form action="/home/hasil" method="POST">
                <div class="list-group">
                    <?php foreach ($gejala as $g) : ?>
                        <label class="list-group-item" for="gejala">
                            <input class="form-check-input me-1" type="checkbox" value="<?= $g['kode_gejala']; ?>" name="gej[]">
                            <?= $g['nama_gejala']; ?>
                        </label>
                    <?php endforeach; ?>
                </div><br>
                <!-- <a href="/home/hasil" class="btn btn-primary">Cek Hasil</a> -->
                <button type="submit" class="btn btn-primary">Cek Hasil</button>
            </form>
        </div>
    </div><br><br><br>
    <footer>
        <h6>Teknik Informatika | 2022</h6>
    </footer>
</body>

</html>