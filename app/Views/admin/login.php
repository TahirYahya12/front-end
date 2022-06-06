<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/login.css">
</head>

<body>
    <form>
        <div class="container">
            <div class="form-group">
                <img src="/img/profil.png" alt="" width="150px">
                <h2 class="text-center "> Pakar Jagung</h2>
                <hr>
                <label for="exampleInputEmail1">masukan email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div><br>
            <div class="form-group">
                <label for="exampleInputPassword1"> masukan Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div><br>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">ingatkan saya</label>
            </div><br>
            <div>
                <button type="submit" class="btn btn-primary" href="/home/admin/"> Login</button>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<script type="text/javascript">
    function validasi() {
        var nama = document.getElementById("nama").value;
        var email = document.getElementById("email").value;

        if (nama != "" && email != "") {
            return true;
        } else {
            alert('Anda harus mengisi data dengan lengkap !');
        }
    }
</script>

</html>