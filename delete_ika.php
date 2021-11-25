<?php
    include 'koneksi_ika.php';

    $nama = $_GET['nama'];
    $sqlDelete = "DELETE FROM pembeli WHERE nama='$nama'";
    mysqli_query($conn, $sqlDelete);

    header("location: tampil_ika.php");
?>