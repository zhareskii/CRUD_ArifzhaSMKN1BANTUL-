<?php
    include "koneksi.php";

    $nis=$_POST ['nis'];
    $nama=$_POST ['nama'];
    $kelas=$_POST ['kelas'];
    $jurusan=$_POST ['jurusan'];

    mysqli_query($koneksi, "INSERT INTO siswa (nis, nama, kelas, jurusan) VALUES ('$nis', '$nama', '$kelas', '$jurusan')");

    header('location: siswa.php');
?>