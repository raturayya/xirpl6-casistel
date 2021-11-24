<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>CASISTEL</title>
</head>
<body>

     <!-- Jumbotron -->
     <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">CASISTEL</span></h1>
          <hr>
          <p class="lead font-weight-bold">Selamat Datang di Kantin Sehat SMK Telkom Purwokerto<br> 
          Please Order as You Wish an Enjoy!</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  bg-danger">
        <div class="container">
        <a class="navbar-brand text-white" href="index.html"><strong>CASISTEL</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.php">FORMULIR PESANAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="tampil.php"> SEDANG DIPESAN</a>
            </li>
            
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

    <div class="container mt-5">
    <a href="pesanan.php" class="btn btn-secondary btn-md mb-3"><i class="fa fa-plus"></i>Tambah Data</a>
    <form method="get" action="">
        <label for="cari">Cari Siswa</label>
        <input type="text" name="cari">    
    </form>
    <br>

    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Tanggal Pemesanan</th>
            <th>Jumlah Pemesanan</th>
            <th>Jenis Makanan</th>
            <th>Jenis Minuman</th>
            <th>Aksi</th>
        </thead>

        <?php
            $sqlGet = "SELECT * FROM pembeli";
            $query = mysqli_query($conn, $sqlGet);

            if (isset($_GET['cari'])) {
                $query = mysqli_query($conn, "SELECT * FROM pembeli WHERE nama LIKE '%".
            $_GET['cari']."%'");
            }

            while($data = mysqli_fetch_array($query)) {
                echo "
                <tbody>
                    <tr>
                    <td>$data[nama]</td>
                    <td>$data[kelas]</td>
                    <td>$data[tgl_pemesanan]</td>
                    <td>$data[jml_pemesanan]</td>
                    <td>$data[jenis_makanan]</td>
                    <td>$data[jenis_minuman]</td>
                    <td>
                        <div class='row'>
                            <div class='col d-flex justify-content-center'>
                                <a href='update.php?nama=$data[nama]' class='btn btn-sm btn-warning'><i class='fa fa-edit'></i>Update</a> 
                        </div>
                            <div class='col d-flex justify-content-center'>
                                <a href='delete.php?nama=$data[nama]' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i>Delete</a> 
                        </div> 
                        </div>
                    </td>
                    </tr>
                </tbody>
                ";
            }
        ?>
    </table>
    </div>
</body>
</html>