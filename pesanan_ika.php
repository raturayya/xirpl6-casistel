<?php
    include 'koneksi_ika.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulir Pembeli</title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-5">
        <a href="tampil_ika.php">Kembali</a>
    <form action="pesanan_ika.php" method="post">
        <label for="nama">Nama Siswa</label>
        <input type="text" id="nama" name="nama" class="form-control" required>

        <label for="nama">Kelas</label>
        <input type="text" id="nama" name="kelas"class="form-control" required>

        <label for="nama">Tanggal Pemesanan</label>
        <input type="text" id="nama" name="tgl_pemesanan" class="form-control" required>

        <label for="nama">Jumlah Pemesanan</label>
        <input type="text" id="nama" name="jml_pemesanan" class="form-control" required>

        <label for="nama">Jenis Makanan</label>
        <select name="jenis_makanan" id="jenis_makanan" class="form-select">
            <option>Pilih Makanan</option>
            <option value="Ayam Geprek">Ayam Geprek</option>
            <option value="Bakso">Bakso</option>
            <option value="Mie Ayam">Mie Ayam</option>
            <option value="Soto">Soto</option>
        </select>

        <label for="nama">Jenis Minuman</label>
        <select name="jenis_minuman" id="jenis_minuman" class="form-select">
            <option>Pilih Minuman</option>
            <option value="Air Mineral">Air Mineral</option>
            <option value="Es Teh">Es Teh</option>
            <option value="Es Jeruk">Es Jeruk</option>
            <option value="Es Kopi">Es Kopi</option>
        </select>

        <input class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah Data">
    </form>
    </div>

    <?php

        if (isset($_POST['tambah'])) {
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $tgl_pemesanan = $_POST['tgl_pemesanan'];
            $jml_pemesanan = $_POST['jml_pemesanan'];
            $jenis_makanan = $_POST['jenis_makanan'];
            $jenis_minuman = $_POST['jenis_minuman'];

            $sqlGet = "SELECT * FROM pembeli WHERE nama='$nama'";
            $queryGet = mysqli_query($conn, $sqlGet);
            $cek = mysqli_num_rows($queryGet);

            $sqlInsert = "INSERT INTO pembeli(nama, kelas, tgl_pemesanan, jml_pemesanan, jenis_makanan, jenis_minuman) VALUES ('$nama', '$kelas', '$tgl_pemesanan', '$jml_pemesanan', '$jenis_makanan', '$jenis_minuman')";
            $queryInsert = mysqli_query($conn, $sqlInsert);

            if ($cek > 0) {
                echo "
                <div class='alert alert-danger'>Data gagal ditambahkan <a href='tampil_ika.php'>Lihat Data</a></div>
                ";
            }
        }
        
    ?>
</body>
</html>