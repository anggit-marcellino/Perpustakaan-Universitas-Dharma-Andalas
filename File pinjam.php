<html>
<head>
	<title>Daftar Peminjaman Buku </title>
	<?php 
	include "File connect.php";
	?>

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
<li><a href="File daftar_menu.php">Daftar Tamu</a></li>
<li><a href="File buku.php">Buku</a></li>
<li><a href="file_daftar_buku.php">Data Buku</a></li>
<li><a href="File pinjam.php">Pinjam</a></li>
<ul>

</td>
<td width="500">
<form method="post" action="file_pinjam_proses.php" >
<table border="0">
<tr>
<td>ID Pinjam</td>
<td>:</td>
<td><input type="text" name="id_pinjam"  placeholder="ID Pinjam"></td>
</tr>
<tr>
<td>Nama Tamu</td>
<td>:</td>
<td><select name="id_tamu" id="id_tamu">
  <option disabled selected> Pilih Tamu </option>
 <?php 
  $sql=mysqli_query($db,"SELECT * FROM table_tamu");
  while ($data=mysqli_fetch_array($sql)) {
 ?>
   <option value="<?=$data['id']?>"><?=$data['nama']?></option> 
 <?php
  }
 ?>
  </select></td>
</tr>
<tr>
<td>Judul Buku</td>
<td>:</td>
<td><select name="nobuku" id="nobuku">
  <option disabled selected> Pilih Buku </option>
 <?php 
  $sql=mysqli_query($db,"SELECT * FROM table_buku");
  while ($data=mysqli_fetch_array($sql)) {
 ?>
   <option value="<?=$data['nobuku']?>"><?=$data['judul']?></option> 
 <?php
  }
 ?>
  </select></td>
</tr>
<tr>
<tr>
<td>Tanggal Pinjam</td>
<td>:</td>
<td><input type="date" name="tgl_pinjam"  placeholder="Tanggal Pinjam"></td>
</tr>
<tr>
<tr>
<td>Jumlah</td>
<td>:</td>
<td><input type="text" name="jumlah_pinjam"  placeholder="Jumlah Buku"></td>
</tr>
<tr>
<td>Tanggal Kembali</td>
<td>:</td>
<td><input type="date" name="tgl_kembali"  placeholder="Tanggal Kembali"></td>
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