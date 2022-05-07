<?php


$hostname = "localhost";
$dbname = "perpus";
$username = "root";
$pass = "";

$conn = mysqli_connect($hostname, $username, $pass, $dbname);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function tambah data 

function insert($data)
{
    global $conn;
    $isbn = htmlspecialchars($data['isbn']);
    $judul = htmlspecialchars($data['judul']);
    $tahun = htmlspecialchars($data['tahun']);
    $id_penerbit = htmlspecialchars($data['penerbit']);
    $id_pengarang = htmlspecialchars($data['pengarang']);
    $id_katalog = htmlspecialchars($data['katalog']);
    $qty_stok = htmlspecialchars($data['stok']);
    $harga_pinjam = htmlspecialchars($data['harga_pinjam']);

    $query = "INSERT INTO buku VALUES ('$isbn','$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $isbn = htmlspecialchars($data['isbn']);
    $judul = htmlspecialchars($data['judul']);
    $tahun = htmlspecialchars($data['tahun']);
    $id_penerbit = htmlspecialchars($data['penerbit']);
    $id_pengarang = htmlspecialchars($data['pengarang']);
    $id_katalog = htmlspecialchars($data['katalog']);
    $stok = htmlspecialchars($data['stok']);
    $harga_pinjam = htmlspecialchars($data['harga_pinjam']);

    $query = "UPDATE buku
             SET 
                judul = '$judul',
                tahun = '$tahun',
                id_penerbit = '$id_penerbit',
                id_pengarang = '$id_pengarang',
                id_katalog = '$id_katalog',
                qty_stok = '$stok',
                harga_pinjam = '$harga_pinjam' 
            WHERE isbn = $isbn";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($isbn)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE isbn = '$isbn'");
    return mysqli_affected_rows($conn);
}
