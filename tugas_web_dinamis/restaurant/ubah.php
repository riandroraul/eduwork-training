<?php

require 'functions.php';

$id = $_GET['id'];
$data = query("SELECT * FROM restaurant WHERE id = $id")[0];

// var_dump($data);
// die;

if (isset($_POST['submit'])) {

    // cek apakah data berhasil diubah atau tidak
    // var_dump(ubah($_POST));
    // die;

    if (ubah($_POST) > 0) {
        echo "
            <script>
            alert('Data Menu Berhasil Diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data Menu Gagal Diubah!');
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
    <title>Ubah Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-3">Ubah Data Menu Restaurant</h2>
        <form class="row g-1" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
            <input type="hidden" name="gambarDefault" value="<?= $data['gambar']; ?>">
            <div class="form-group">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori" value="<?= $data['kategori']; ?>">
            </div>
            <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="desc" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"><?= $data['deskripsi']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="inputAddress2" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" value="<?= $data['harga']; ?>">
            </div>
            <div class="mb-6">
                <label for="gambar">Gambar</label><br>
                <img src="img/pizza/<?= $data['gambar']; ?>"><br>
                <input name="gambar" type="file" id="gambar">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
            </div>
        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>