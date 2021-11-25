<?php
    include 'koneksi_ika.php';

    $nama = $_GET['nama'];

    $sqlGet = "SELECT * FROM pembeli WHERE nama='$nama'";
    $queryGet = mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD | IKA </title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-5">
        <a href="tampil_ika.php">Kembali</a>
    <form action="update_ika.php" method="post">
        <label for="nama">Nama Siswa</label>
        <input type="text" id="nama" name="nama" value="<?php echo "$data[nama]";?>" class="form-control" readonly>

        <label for="nama">Kelas</label>
        <input type="text" id="kelas" name="kelas" value="<?php echo "$data[kelas]";?>" class="form-control" required>

        <label for="nama">Tanggal Pemesanan</label>
        <input type="text" id="tgl_pemesanan" name="tgl_pemesanan" value="<?php echo "$data[tgl_pemesanan]";?>" class="form-control" required>

        <label for="nama">Jumlah Pemesanan</label>
        <input type="text" id="jml_pemesanan" name="jml_pemesanan" value="<?php echo "$data[jml_pemesanan]";?>" class="form-control" required>

        <label for="nama">Jenis Makanan</label>
        <select name="jenis_makanan" id="jenis_makanan" class="form-select" required>
            <option><?php echo "$data[jenis_makanan]";?></option>
            <option value="Ayam Geprek">Ayam Geprek</option>
            <option value="Bakso">Bakso</option>
            <option value="Mie Ayam">Mie Ayam</option>
            <option value="Soto">Soto</option>
        </select>

        <label for="nama">Jenis Minuman</label>
        <select name="jenis_minuman" id="jenis_minuman" class="form-select" required>
            <option><?php echo "$data[jenis_minuman]";?></option>
            <option value="Air Mineral">Air Mineral</option>
            <option value="Es Teh">Es Teh</option>
            <option value="Es Jeruk">Es Jeruk</option>
            <option value="Es Kopi">Es Kopi</option>
        </select>

        <input class="btn btn-success mt-3" type="submit" name="tambah" value="Update Data">
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

            
            $sqlUpdate = "UPDATE pembeli SET kelas='$kelas', tgl_pemesanan='$tgl_pemesanan', jml_pemesanan='$jml_pemesanan', jenis_makanan='$jenis_makanan', jenis_minuman='$jenis_minuman'
                        WHERE nama='$nama'";

            $queryUpdate = mysqli_query($conn, $sqlUpdate);

            header("location: tampil_ika.php");
        }
        
    ?>
</body>
</html>
