<?php
require('../functions.php');


$penerbit = query('SELECT * FROM penerbit');
$pengarang = query('SELECT * FROM pengarang');
$katalog = query('SELECT * FROM katalog');

$isbn = $_GET['isbn'];
$book = query("SELECT * FROM buku WHERE isbn = '$isbn'")[0];

if (isset($_POST['submit'])) {
    var_dump(edit($_POST));

    if (edit($_POST) > 0) {
        echo "
        <script>
            alert('Data Buku Berhasil Diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Buku Gagal Diubah');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Book</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h4 class="text-center">Edit Book Data</h4>
            </div>
        </div>
        <form action="edit.php?isbn=<?= $book['isbn']; ?>" method="post">
            <table width="100%" class="table table-bordered" cellpadding="10" border="0">

                <tr>
                    <td>ISBN</td>
                    <td><input readonly="" type="text" name="isbn" id="isbn" class="form-control" value="<?= $isbn; ?>"></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="judul" id="judul" class="form-control" value="<?= $book['judul']; ?>"></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td><input type="text" name="tahun" id="tahun" class="form-control" value="<?= $book['tahun']; ?>"></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>
                        <select class="form-select" name="penerbit">
                            <?php foreach ($penerbit as $each) : ?>
                                <option value="<?= $each['id_penerbit']; ?>">
                                    <?php if ($each['id_penerbit'] == $book['id_penerbit']) : ?>
                                <option selected>
                                <?php endif; ?>
                                <?= $each['nama_penerbit']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td>
                        <select class="form-select" name="pengarang">
                            <?php foreach ($pengarang as $each) : ?>
                                <option spellcheck="<?= $each['nama_pengarang']; ?>">
                                    <?php if ($each['id_pengarang'] == $book['id_pengarang']) : ?>
                                <option selected>
                                <?php endif; ?>
                                <?= $each['nama_pengarang']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Katalog</td>
                    <td>
                        <select class="form-select" name="katalog">
                            <?php foreach ($katalog as $each) : ?>
                                <option value="<?= $each['nama']; ?>">
                                    <?php if ($each['id_katalog'] == $book['id_katalog']) : ?>
                                <option selected>
                                <?php endif; ?>
                                <?= $each['nama']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="text" name="stok" id="stok" class="form-control" value="<?= $book['qty_stok']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga Pinjam</td>
                    <td><input type="text" name="harga_pinjam" id="harga_pinjam" class="form-control" value="<?= $book['harga_pinjam']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="edit" id="" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>

<?php



?>