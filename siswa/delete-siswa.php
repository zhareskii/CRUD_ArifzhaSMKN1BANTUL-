<?php
include "koneksi.php";

// Periksa apakah ID ada di URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: ID tidak ditemukan.");
}

$id = $_GET['id'];

// Jalankan query DELETE
$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");

if ($query) {
    // Redirect kembali ke daftar siswa setelah berhasil menghapus
    header('Location: siswa.php');
} else {
    die("Error: Gagal menghapus data. " . mysqli_error($koneksi));
}
?>
