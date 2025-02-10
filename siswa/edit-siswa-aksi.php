<?php
include "koneksi.php";

if (!isset($_POST['id']) || empty($_POST['id'])) {
    die("Error: ID tidak ditemukan.");
}

$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

// Debugging sebelum query dijalankan
echo "ID: " . $id . "<br>";
echo "Query: UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id='$id'<br>";

$query = mysqli_query($koneksi, "UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id='$id'");

if (!$query) {
    die("Query Error: " . mysqli_error($koneksi));
}

header('Location: siswa.php');
?>
