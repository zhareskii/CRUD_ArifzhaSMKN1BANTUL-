<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Siswa</h2>
    <form method="post" action="tambah-siswa-aksi.php">
        <div class="input-box">
            <label>NIS:</label>
            <input type="text" name="nis" required>
        </div>
        <br>
        <div class="input-box">
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </div>
        <br>
        <div class="input-box">
            <label>Kelas:</label>
            <input type="text" name="kelas" required>
        </div>
        <br>
        <div class="input-box">
            <label>Jurusan:</label>
            <input type="text" name="jurusan" required>
        </div>
        <br>
        <button type="submit">Tambah Siswa</button>
    </form>
</body>
</html>
