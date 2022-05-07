<?php


$hostname = "localhost";
$dbname = "eduwork";
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

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $fileSize = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpFile = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('pilih Gambar!');
             </script>";
        return false;
    }

    // pastikan yang boleh diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Bukan Gambar!');
             </script>";
        return false;
    }
    // cek ukurannya jika terlalu besar
    if ($fileSize > 1500000) {
        echo "<script>
                alert('Ukuran File Terlalu Besar!');
             </script>";
        return false;
    }
    // lolos pengecekan gambar
    // generate nama file gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.' . $ekstensiGambar;
    move_uploaded_file($tmpFile, 'img/pizza/' . $namaFileBaru);

    return $namaFileBaru;
}
// function tambah data 

function insert($data)
{
    global $conn;
    // ambil data dari tiap elemen di dalam form
    $nama = htmlspecialchars($data['nama']);
    $desc = htmlspecialchars($data['desc']);
    $kategori = htmlspecialchars($data['kategori']);
    $harga = htmlspecialchars($data['harga']);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO restaurant VALUES 
	('', '$kategori', '$nama', '$desc', '$harga', '$gambar')";
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

    $query = "UPDATE buku SET 
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


function ubah($data)
{
    global $conn;

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $desc = htmlspecialchars($data['desc']);
    $kategori = htmlspecialchars($data['kategori']);
    $harga = htmlspecialchars($data['harga']);
    $gambarDefault = htmlspecialchars($data['gambarDefault']);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarDefault;
    } else {
        $gambar = upload();
    }


    $query = "UPDATE restaurant SET 
    			kategori = '$kategori',
    			nama = '$nama',
    			deskripsi = '$desc',
    			harga = '$harga',
    			gambar = '$gambar'
    			WHERE id = $id
    			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM restaurant WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}
