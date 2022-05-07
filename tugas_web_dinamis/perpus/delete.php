<?php

require '../functions.php';

$isbn = $_GET['isbn'];
$book = query("SELECT * FROM buku WHERE isbn = $isbn")[0];
// var_dump(delete($_POST));
// die;
// if (delete($isbn) > 0) {
//     echo "
// 	  <script>  
//             alert('Data Berhasil Dihapus!');
//             document.location.href = 'index.php';
//           </script>
//         ";
// } else {
//     echo "
//         <script>
//             alert('Data Gagal Dihapus!');
//             document.location.href = 'index.php';
//         </script>
//         ";
// }
?>

<!DOCTYPE html>
<html>

<?php if (hapus($isbn) > 0) : ?>
    <script>
        alert('Data Buku <?= $book['judul']; ?> Berhasil Dihapus!');
        document.location.href = 'index.php';
    </script>
<?php else : ?>
    <script>
        alert('Data Buku <?= $book['judul']; ?> Gagal Dihapus!');
        document.location.href = 'index.php';
    </script>
    ";
<?php endif; ?>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

</body>

</html>