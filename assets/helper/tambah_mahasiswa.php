<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
$data = mysqli_query($koneksi,"insert into mahasiswa values(id,'$nama','$nim','$alamat')");
if ($data) {
    header("location:../../page/mahasiswa.php?pesan=sukses");
  } else {
    header("location:../../page/mahasiswa.php?pesan=gagal");
  };
?>