<?php
include 'koneksi.php';
session_start();
// menyimpan data kedalam variabel
$nama_project     = $_POST['nama_project'];
$kategori_project = $_POST['kategori_project'];
$visibilitas      = $_POST['visibilitas'];
$iduser = $_SESSION['iduser'];

$input ="INSERT INTO project values (null,'$nama_project','$kategori_project','$visibilitas',null,'$iduser')";
$query = mysqli_query($koneksi, $input) or die("ERROR");
if(!$query){
	echo "<script>alert('Maaf tidak bisa input');window.location='project/create_project.php'</script>";
}else{
	echo "<script>alert('berhasil input proker');window.location='project.php'</script>";
}


?>