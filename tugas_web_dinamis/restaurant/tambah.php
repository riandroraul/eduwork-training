<?php

require 'functions.php';

if (isset($_POST['submit'])) {

    if (insert($_POST) > 0) {
        echo "
            <script>
            alert('Data Menu Berhasil Ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data Menu Gagal Ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-3">Tambah Data Menu Restaurant</h2>
        <form class="row g-1" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori">
            </div>
            <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="">
            </div>
            <div class="form-group">
                <label for="Desc" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="Desc" name="desc" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="inputAddress2" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga">
            </div>
            <div class="mb-6">
                <label for="gambar">Gambar</label>
                <input name="gambar" type="file" id="gambar">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
            </div>
        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>