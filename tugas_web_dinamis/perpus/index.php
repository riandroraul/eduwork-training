<?php


require('../functions.php');

$books = query("SELECT buku.*, katalog.nama AS nama_katalog, nama_penerbit, nama_pengarang FROM buku
JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang
JOIN katalog ON katalog.id_katalog = buku.id_katalog");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <h5><a href="index.php">Buku</a></h5>
            </div>
            <div class="col-md-2">
                <h5><a href="katalog.php">Katalog</a></h5>
            </div>
            <div class="col-md-2">
                <h5><a href="penerbit.php">Penerbit</a></h5>
            </div>
            <div class="col-md-2">
                <h5><a href="pengarang.php">Pengarang</a></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a href="add.php" class="btn btn-primary mb-3">Add New Book</a>
            </div>
            <div class="col-md-12">
                <table class="table table-striped" cellspacing="0">
                    <thead class="fw-bold">
                        <tr>
                            <td class="text-center">ISBN</td>
                            <td class="text-center">Judul</td>
                            <td class="text-center">Tahun</td>
                            <td class="text-center">Penerbit</td>
                            <td class="text-center">Pengarang</td>
                            <td class="text-center">Katalog</td>
                            <td class="text-center">Stok</td>
                            <td class="text-center">Harga Pinjam</td>
                            <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book) : ?>
                            <tr>
                                <td><?= $book['isbn']; ?></td>
                                <td><?= $book['judul']; ?></td>
                                <td><?= $book['tahun']; ?></td>
                                <td><?= $book['nama_penerbit']; ?></td>
                                <td><?= $book['nama_pengarang']; ?></td>
                                <td><?= $book['nama_katalog']; ?></td>
                                <td><?= $book['qty_stok']; ?></td>
                                <td><?= $book['harga_pinjam']; ?></td>
                                <td class="text-center">
                                    <a href="edit.php?isbn=<?= $book['isbn']; ?>" class="btn btn-success" type="submit">edit</a>
                                    <a href="delete.php?isbn=<?= $book['isbn']; ?>" class="btn btn-danger" onclick="return confirm('Data Buku <?= $book['judul']; ?> akan dihapus ?')" id="btn-delete">delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
</body>

</html>