<?php


require 'functions.php';
$menus = query("SELECT * FROM restaurant");


// var_dump($menus);
// die;
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Restaurant</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-light" href="#">Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    <!-- <a class="nav-link" href="#">Features</a> -->
                    <!-- <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>All Menu</h1>
            </div>
        </div>

        <a href="tambah.php" type="submit" class="btn btn-primary mt-3">Tambah Data Menu</a>
        <div class="row mt-3">
            <?php foreach ($menus as $menu) : ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/pizza/<?= $menu['gambar']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $menu['nama']; ?></h5>
                            <p class="card-text"><?= $menu['deskripsi']; ?></p>
                            <h5 class="card-title">Rp. <?= $menu['harga']; ?></h5>
                            <a href="ubah.php?id=<?= $menu['id']; ?>" class="btn btn-primary" type="submit">ubah</a>
                            <a href="hapus.php?id=<?= $menu['id']; ?>" class="btn btn-primary" type="submit" onclick="return confirm('Menu <?= $menu['nama']; ?> akan dihapus ?')">hapus</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>