<html>
<head>
	<title>UPT PERPUSTAKAAN UNIVERSITAS DHARMA ANDALAS</title>
</head>
	<body bgcolor="lime">
		<center><img src="img/unidha.png" width="10%" >
		<h2 align="center">UPT PERPUSTAKAAN UNIVERSITAS DHARMA ANDALAS</h2>
		<button width="68" align="center"><a href="index.php">[ Home ]</a></button> 
		<button width="68" align="center"><a href="File pinjam.php">[Tambah Peminjaman Buku] </a></button></center>
		<h3 align="center">DAFTAR PEMINJAMAN</h3>
	<table cellpadding="5"cellspacing="0" border="1" align="center">
		<thead>
			<tr bgcolor="#CCCCCC">
				<th>No</th>
				<th>ID Pinjam</th>
				<th>ID Tamu</th>
				<th>No Buku</th>
				<th>Tgl Pinjam</th>
				<th>Jumlah Pinjam</th>
				<th>Tgl Kembali</th>
			</tr>
		</thead>
		<tbody bgcolor="white">
			<?php
			include_once("File connect.php"); 
			$i=1;
			$datas = $db->query("SELECT * FROM table_pinjam");  
			while($data = $datas->fetch_object()){?>

			<tr>
				<td style="text-align: center;"><?= $i++; ?></td>
				<td style="text-align: center;"><?= $data->id_pinjam; ?></td>
				<td style="text-align: center;"><?= $data->id_tamu; ?></td>
				<td style="text-align: center;"><?= $data->nobuku; ?></td>
				<td style="text-align: center;"><?= $data->tgl_pinjam; ?></td>
				<td style="text-align: center;"><?= $data->jumlah_pinjam; ?></td>
				<td style="text-align: center;"><?= $data->tgl_kembali; ?></td>
			</tr>
			<?php } ?>
		</tbody>
				</table>
	</body>
	<br><br><br><br><br><br>
	<center><h3 style="color: black;">Anggit Marcellino 2020<br> 
	18130015</h3></center>
</html>