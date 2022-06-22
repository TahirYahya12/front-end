<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/style2.css">
    <!-- <link rel="stylesheet" href="/css/dashboard.css"> -->
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-3 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Sistem Pakar</a>
        <div class="navbar-nav">
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <img src="/img/logo3.png" alt="" width="90%"><br>
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/penyakit2">
                                <span data-feather="file"></span>
                                Data Penyakit
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/gejala">
                                <span data-feather="shopping-cart"></span>
                                Data Gejala
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aturan">
                                <span data-feather="users"></span>
                                Data Aturan
                            </a>
                        </li><br><br><br>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/coba">
                                <span data-feather="users"></span>
                                Keluar
                            </a>
                        </li><br>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div><br>
                <img src="/img/ha.jpg" class="img-fluid" alt="..." width="100%">
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>