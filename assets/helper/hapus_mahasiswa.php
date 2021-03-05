<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
$data = mysqli_query($koneksi,"delete from mahasiswa where id='$id'");
if ($data) {
    header("location:../../page/mahasiswa.php?pesan=sukses");
  } else {
    header("location:../../page/mahasiswa.php?pesan=gagal");
  };
?>