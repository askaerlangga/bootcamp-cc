<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <title>Mahasiswa</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-purple">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bootcamp CC</a>
            <a href="../assets/helper/logout.php" class="btn btn-sm btn-danger" role="button">Logout</a>
        </div>
    </nav>
    <div class="container">
        <div>
            <h1 style="margin: 30px 0 20px 0; text-align:center">Data Mahasiswa</h1>
            <?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan']=="sukses"){
						echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>Data Mahasiswa <strong>Berhasil Tersimpan!</strong><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
					}else{
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Data Mahasiswa <strong>Gagal Tersimpan!</strong><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                    }
				}
				?>
            <?php require_once('../assets/helper/modal.php'); ?>
            <button type="button" class="btn btn-sm bg-teal" data-bs-toggle="modal" data-bs-target="#tambahMahasiswa">
                Tambah
            </button>
            

            <table style="text-align: center;" class="table table-hover">
                <thead style="text-align: center;">
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <?php
                include '../assets/helper/koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from mahasiswa");
                while($d = mysqli_fetch_array($data)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['nim']; ?></td>
                        <td><?php echo $d['alamat'] ?></td>
                        <td>

                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#editMahasiswa<?php echo $d['id'] ?>">
                                Edit
                            </button>

                            <a href="../assets/helper/hapus_mahasiswa.php?id=<?php echo $d['id']; ?>"
                                class="btn btn-danger btn-sm" role="button">Hapus</a>
                        </td>
                    </tr>

                    <?php include('../assets/helper/modal.php'); ?>
                </tbody>
                <?php 
                }
                ?>
            </table>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>