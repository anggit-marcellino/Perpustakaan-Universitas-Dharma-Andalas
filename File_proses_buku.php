<?php
include "File connect.php";

$Kode    = $_POST['nobuku'];
$Judul    = $_POST['judul'];
$Penerbit    = $_POST['penerbit'];
$Status    = $_POST['status_pinjam'];

$sql = "INSERT INTO table_buku(nobuku, judul, penerbit, status_pinjam) VALUES('$Kode', '$Judul', '$Penerbit', '$Status')";
	$query = mysqli_query($db, $sql);

if (!$query) {
	die ('ERROR: Data tidak berhasil di tambahkan ' . $sql . ': ' . mysqli_error($db));
}

	echo '';
	echo 'Data berhasil di tambahkan!' ;
	echo '<a href="file_daftar_buku.php">Kembali></a>';


?>