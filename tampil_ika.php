<?php
    include 'koneksi_ika.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <title>Casistel</title>
</head>
<body>
    <h1 style="text-center">Casistel</h1>
    <div class="container mt-5">
    <a href="pesanan_ika.php" class="btn btn-primary btn-md mb-3"><i class="fa fa-plus"></i>Tambah Data</a>
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
                                <a href='update_ika.php?nama=$data[nama]' class='btn btn-sm btn-warning'><i class='fa fa-edit'></i>Update</a> 
                        </div>
                            <div class='col d-flex justify-content-center'>
                                <a href='delete_ika.php?nama=$data[nama]' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i>Delete</a> 
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
