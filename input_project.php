<?php
include 'koneksi.php';
session_start();
// menyimpan data kedalam variabel
$nama_project     = $_POST['nama_project'];
$kategori_project = $_POST['kategori_project'];
$iduser = $_SESSION['iduser'];

$input ="INSERT INTO project values (null,'$nama_project','$kategori_project',null,'$iduser')";
$query = mysqli_query($koneksi, $input) or die("ERROR");
if(!$query){
	echo "<script>alert('Maaf tidak bisa input');window.location='form.php'</script>";
}else{
	echo "<script>alert('berhasil input proker');window.location='form.php'</script>";
}


?>