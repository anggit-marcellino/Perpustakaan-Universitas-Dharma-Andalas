<?php
include "File connect.php";

$id_pinjam   = $_POST['id_pinjam'];
$id_tamu    = $_POST['id_tamu'];
$nobuku   = $_POST['nobuku'];
$tgl_pinjam    = $_POST['tgl_pinjam'];
$jumlah_pinjam   = $_POST['jumlah_pinjam'];
$tgl_kembali    = $_POST['tgl_kembali'];

$sql = "INSERT INTO table_pinjam(id_pinjam, id_tamu, nobuku, tgl_pinjam, jumlah_pinjam, tgl_kembali) VALUES('$id_pinjam', '$id_tamu', '$nobuku', '$tgl_pinjam', '$jumlah_pinjam', '$tgl_kembali')";
	$query = mysqli_query($db, $sql);

if (!$query) {
	die ('ERROR: Data tidak berhasil di tambahkan ' . $sql . ': ' . mysqli_error($db));
}

	echo '';
	echo 'Data berhasil di tambahkan!' ;
	echo '<a href="File pinjam.php">Kembali></a>';


?>