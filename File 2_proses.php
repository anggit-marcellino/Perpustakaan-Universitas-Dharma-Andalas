<?php

require_once("File connect.php");

$Nama = $_POST["Nama"];
$Instansi = $_POST ["Instansi"];
$Kategori = $_POST["Kategori"];
$Jurusan = $_POST["Jurusan"];
$Tanggal = date("Y-m-d");

 	
// $db = new mysqli("localhost", "root", "", "db_crud");
// if($db->errno > 0) {
//     echo "Koneksi gagal";
// }
// 	$table_name = 'table_tamu';

	$sql = "INSERT INTO table_tamu(nama, instansi, kategori, jurusan, tanggal) VALUES('$Nama', '$Instansi', '$Kategori', '$Jurusan', '$Tanggal')";
	$query = mysqli_query($db, $sql);

if (!$query) {
	die ('ERROR: Data tidak berhasil di tambahkan ' . $sql . ': ' . mysqli_error($db));
}

	echo '';
	echo 'Data berhasil di tambahkan!' ;
	echo '<a href="File2.php">Kembali></a>';

?>