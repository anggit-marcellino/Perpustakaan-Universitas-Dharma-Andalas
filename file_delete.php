<?php

	require_once("File connect.php");
	
	$id=$_GET['id'];
	
	$sql = "DELETE FROM table_tamu WHERE id=$id";
	$query = mysqli_query($db, $sql);

if (!$query) {
	die ('ERROR: Data tidak berhasil di tambahkan ' . $sql . ': ' . mysqli_error($db));
}

	echo '';
	echo 'Data berhasil dihapus!' ;
	echo '<a href="File daftar_menu.php">Kembali></a>';

?>