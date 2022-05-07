<?php

require 'functions.php';

$id = $_GET['id'];
$menu = query("SELECT * FROM restaurant WHERE id = '$id'");


if (hapus($id) > 0) {
    echo "
        <script>  
            alert('Data Menu Berhasil Dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data Menu Gagal Dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Hapus</title>
</head>

<body>


</body>

</html>