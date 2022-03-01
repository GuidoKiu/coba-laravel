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
    <div class="container mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nama : <?= $Nama;  ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Hobi : <?= $Hobi;  ?></h6>
                    <p class="card-text">Bahasa Pemograman : <?= $BahasaPemograman;  ?></p>
                </div>
            </div>
    </div>
</body>
</html>