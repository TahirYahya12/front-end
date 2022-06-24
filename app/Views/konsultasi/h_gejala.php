<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
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
                <a href="/home/tanaman">Basis Pengetahuan</a>
                <a href="/home/bantuan">Bantuan</a>
                <a href="/home/tentang">Tentang</a>
            </div>
            <div class="icons">
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>
        </header><br><br><br><br><br><br><br><br><br><br>
        <div class="card mb-1" style="max-width: 100%;">
            <!-- <div class="nav nav-tabs">
                <a class="nav-link active" aria-current="true" href="/">Home</a>
            </div><br> -->
            <h3>Silahkan pilih gejaja penyakit</h3>
            <div class="list-group">
                <?php $i = 1; ?>
                <?php foreach ($gejala as $g) : ?>
                    <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="">
                        <?= $g['nama_gejala']; ?>
                    </label>
                <?php endforeach; ?>

                <!-- <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Garis tertutup tepung putih
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Daun berwarna kuning keputih-putihan
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Daun kaku
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Tanaman kerdil / Batang memendek
                </label><label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Pembentukan tongkol terhambat
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Tongkol kecil-kecil
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Bercak-bercak bulat sampai lonjong
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Bercak-bercak berwarna kuning pada daun
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Tanaman berwarna cokelat muda hingga tua
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Tanaman kebasahan
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Bercak-bercak/noda-noda kecil berwarna merah karat
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Terdapat tepung berwarna cokelat kekuning-kuningan / kuning kecokelatan
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Garis terputus-putusdiseluruh permukaan daun
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Bercak berwarna kelabu/keputihan
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Bercak-bercak pada pelepah
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Bercak warna salmon
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Bercak meluas berwarna abu-abu atau putih
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Tanaman patah secara tiba-tiba
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Warna cokelat pada buku batang paling bawah
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Batang basah,Lunak,dan Bercincing
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Berbau busuk
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Ditengah-tengah bercak berwarna cokelat
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Biji terdapat jamur berwarna putih sampai cokelat kelabu
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Busuk berwarna merah jambu atau kemerahan sampe cokelat
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Pembentukan biji tidak sempurna
                </label> -->
            </div><br>
            <a href="/home/hasil" class="btn btn-primary">Cek Hasil</a>
        </div>
    </div><br><br><br>
    <footer>

        <h6>Teknik Informatika | 2022</h6>
    </footer>
</body>

</html>