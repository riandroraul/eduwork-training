<?php

require_once('functions.php');
$anggota = query("SELECT * FROM anggota");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
</head>

<body>

    <table id="table" class="display">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No.telp</th>
                <th>alamat</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($anggota as $each) : ?>
                <tr>
                    <th><?= $each['nama']; ?></th>
                    <th><?= $each['sex']; ?></th>
                    <th><?= $each['telp']; ?></th>
                    <th><?= $each['alamat']; ?></th>
                    <th><?= $each['email']; ?></th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
</body>
</body>

</html>