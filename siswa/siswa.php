<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Siswa</title>
</head>
<body>
    
    <h2>Daftar Siswa</h2>
    <div class="actionButtonn">
        <a href="tambah-siswa.php">Tambah Data</a>
    </div>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>  

        <?php
        $no = 1; // Nomor urut
        $data = mysqli_query($koneksi, "SELECT * FROM siswa");

        if (mysqli_num_rows($data) > 0) {
            while ($tampil = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $tampil['nis']; ?></td>
            <td><?php echo $tampil['nama']; ?></td>
            <td><?php echo $tampil['kelas']; ?></td>
            <td><?php echo $tampil['jurusan']; ?></td>
            <td>
                <a href="delete-siswa.php?id=<?php echo $tampil['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?');">Hapus</a> |
                <a href="edit-siswa.php?id=<?php echo $tampil['id']; ?>">Edit</a>
            </td>
        </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada data siswa.</td></tr>";
        }
        ?>
    </table>

</body>
</html>