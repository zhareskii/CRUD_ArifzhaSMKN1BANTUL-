<?php
include "koneksi.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: ID tidak ditemukan di URL.");
}

$id = $_GET['id'];

// Query untuk mengambil data berdasarkan ID
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");

// Cek apakah data ditemukan
if (mysqli_num_rows($data) == 0) {
    die("Error: Data tidak ditemukan.");
}

$isi = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Siswa</title>
</head>
<body>
    <h2>Tambah Siswa</h2>
    <form method="POST" action="edit-siswa-aksi.php">
        <input type="hidden" name="id" value="<?php echo $isi['id']; ?>"> <!-- Tambahkan ini -->
        
        <div class="input-box">
            <label>NIS:</label>
            <input type="text" name="nis" value="<?php echo $isi['nis']; ?>" required>
        </div>
        <br>
        <div class="input-box">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $isi['nama']; ?>" required>
        </div>
        <br>
        <div class="input-box">
            <label>Kelas:</label>
            <input type="text" name="kelas" value="<?php echo $isi['kelas']; ?>" required>
        </div>
        <br>
        <div class="input-box">
            <label>Jurusan:</label>
            <input type="text" name="jurusan" value="<?php echo $isi['jurusan']; ?>" required>
        </div>
        <br>
        <button type="submit">Edit Data</button>
    </form>

</body>
</html>
<?php
?>