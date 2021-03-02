<?php

require_once("File connect.php");

$id=$_GET['id'];
$Nama = $_POST["Nama"];
$Instansi = $_POST ["Instansi"];
$Kategori = $_POST["Kategori"];
$Jurusan = $_POST["Jurusan"];
$Tanggal = date("Y-m-d");

	$sql = "UPDATE table_tamu set nama='$Nama' ,instansi='$Instansi',kategori='$Kategori',jurusan='$Jurusan',tanggal='$Tanggal' where id=$id";
	$query = mysqli_query($db, $sql);

if (!$query) {
	die ('ERROR: Data tidak berhasil di tambahkan ' . $sql . ': ' . mysqli_error($db));
}

	echo '';
	echo 'Data berhasil diedit!' ;
	echo '<a href="File daftar_menu.php">Kembali></a>';

?>