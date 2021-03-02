<html>
<head>
	<title>Daftar Peminjaman Buku </title>

		<center><img src="img/unidha.png" width="10%"></center>
</head>
<body bgcolor="lime">
<center><table cellpadding="5"cellspacing="0" border="1" align="center">
	<tbody bgcolor="white">
<tr>
<td colspan="2" align="center"><h2>Silahkan Isi Daftar Peminjaman Buku Di Bawah Ini</h2></td>
</tr>
<tr>
<td width = "200">
<ul>
<li><a href="File2.php">Tamu</a></li>
<li><a href="File daftar_menu.php">Daftar Tamu</a></li>
<li><a href="File buku.php">Buku</a></li>
<li><a href="file_daftar_buku.php">Data Buku</a></li>
<li><a href="File pinjam.php">Pinjam</a></li>
<ul>

</td>
<td width="500">
<form method="post" action="File_proses_buku.php" >
<table border="0">
<tr>
<td>Kode Buku</td>
<td>:</td>
<td><input type="text" name="nobuku"  placeholder="No Buku"></td>
</tr>
<tr>
<td>Judul Buku</td>
<td>:</td>
<td><input type="text" name="judul"  placeholder="Judul Buku"></td>
</tr>
<tr>
<td>Penerbit</td>
<td>:</td>
<td><input type="text" name="penerbit"  placeholder="Penerbit Buku"></td>
</tr>
<tr>
<td>Status Buku</td>
<td>:</td>
<td><select name="status_pinjam">
<option value="Dipinjam Dan Di Bawa Pulang">Dipinjam Dan Di Bawa Pulang</option>
<option value="Dibaca Di Lingkup Perpustakaan">Dibaca Di Lingkup Perpustakaan</option>
</select></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="simpan" value="simpan"></td>
</tr>

</table>
</center>
</form>
</td>
</tr>
<tr>
<td colspan="2" align="center">Anggit Marcellino 2020<br></script></td>
</tr>
</table>

</body>
</html>