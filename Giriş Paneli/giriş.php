<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Giriş Paneli</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class='col-md-6 mx-auto mt-5'>
    <form action="girişkontrol.php" method="post">
        <input type="text" class="form-control" placeholder="Kullanıcı Adınızı Giriniz ..." name='kullanıcı'> <br><br>
        <input type="password" class="form-control" placeholder="Şifrenizi Giriniz ..." name="şifre"><br><br>
        <button class="btn btn-secondary col-md-2 bt-css">Doğrula</button>
    </form>
    </div>
</body>
</html>