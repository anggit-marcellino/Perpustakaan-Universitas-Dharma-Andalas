<html>
<head>
	<title>UPT PERPUSTAKAAN UNIVERSITAS DHARMA ANDALAS</title>
</head>
	<body bgcolor="lime">
		<center><img src="img/unidha.png" width="10%" >
		<h2 align="center">UPT PERPUSTAKAAN UNIVERSITAS DHARMA ANDALAS</h2>
		<button width="68" align="center"><a href="index.php">[ Home ]</a></button> 
		<button width="68" align="center"><a href="File2.php">[Isi Buku Tamu] </a></button></center>
		<h3 align="center">DAFTAR PENGUNJUNG</h3>
	<table cellpadding="5"cellspacing="0" border="1" align="center">
		<thead>
			<tr bgcolor="#CCCCCC">
				<th>No</th>
				<th>Tanggal</th>
				<th>Nama</th>
				<th>Instansi</th>
				<th>Kategori</th>
				<th>Jurusan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody bgcolor="white">
			<?php
			include_once("File connect.php"); 
			$i=1;
			$datas = $db->query("SELECT * FROM table_tamu");  
			while($data = $datas->fetch_object()){?>

			<tr>
				<td style="text-align: center;"><?= $i++; ?></td>
				<td style="text-align: center;"><?= $data->tanggal; ?></td>
				<td style="text-align: center;"><?= $data->nama; ?></td>
				<td style="text-align: center;"><?= $data->instansi; ?></td>
				<td style="text-align: center;"><?= $data->kategori; ?></td>
				<td style="text-align: center;"><?= $data->jurusan; ?></td>
				<td>
					<a href="file_update.php?id=<?= $data->id; ?>">Edit</a>
					<a href="file_delete.php?id=<?= $data->id; ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
				</table>
	</body>
	<br><br><br><br><br><br>
	<center><h3 style="color: black;">Anggit Marcellino 2020<br> 
	18130015</h3></center>
</html>