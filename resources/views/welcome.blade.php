<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $Judul;  ?></title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-4">
            <div class="container">
                <h1 class="display-3">Hello, world! Selamat Datang di Project Pembelajaran Laravel</h1>
                <br>
                <h3 class="">Nama Saya adalah <?= $Nama;  ?></p>
                <br>
                <p><a class="btn btn-primary btn-lg" href="about.blade.php" role="button"> Detail mengenai saya</a></p>
            </div>
        </div>
    </div>
</body>
</html>