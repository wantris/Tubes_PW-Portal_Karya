<?php
include "koneksi.php";
$NamaProject = $_GET['nama_project'];
$KategoriProject = $_GET['kategori'];
$Visibilitas = $_GET['visibilitas'];

$input ="INSERT INTO project values (null,'$NamaProject','$KategoriProject',null,'$Visibilitas', null)";
$query = mysqli_query($koneksi, $input) or die("ERROR");
if(!$query){
	echo "<script>alert('Maaf tidak bisa input');window.location='create_project.php'</script>";
}else{
	echo "<script>alert('berhasil input proker');window.location='create_project.php'</script>";
}




?>