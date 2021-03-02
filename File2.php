<html>

<head>
	<title>Buku Tamu </title>
	<body bgcolor="lime">
		<center><img src="img/unidha.png" width="10%"></center>
</head>

<body>

	<div>
		<form action = "File 2_proses.php" method="POST">
<table>

<h1 align="center"><b>DAFTAR PENGUNJUNG</b></h1>
<p align="center"><b> Silahkan Isi Daftar Pengunjung Di Bawah Ini</b></p>


	<form action=""method="post">
	<table cellpadding="40" cellspacing="50">
	<center><p><b>Nama Lengkap :</b><br>	
	<input type="text" name="Nama" size="50"></p>
	<p><b>Instansi Asal :</b><br><input type="text" name="Instansi" size="80"></p>
	<p><b>Kategori :</b><br><Select name="Kategori">  
	    
	    <option value="">Pilih Kategori</option>
		<option value="Dosen">Dosen</option>
		<option value="Karyawan">Karyawan</option>
		<option value="Mahasiswa">Mahasiswa</option>
		</Select> 
		</p>

	<p><b>Untuk Mahasiswa UNIDHA, Silahkan PILIH Daftar JURUSAN Di Bawah ini</b></p>
	<p><b>Jurusan :</b><br><SELECT name="Jurusan" rows="5" cols="10">
			<option value="">Pilih JURUSAN</option>
			<option value="S1 MANAJEMEN">S1 MANAJEMEN</option>
			<option value="S1 AKUNTASI">S1 AKUNTASI</option>
			<option value="D3 MANAJEMEN">D3 MANAJEMEN</option>
			<option value="D3 AKUNTASI">D3 AKUNTASI</option>
			<option value="S1 SISTEM INFORMASI">S1 SISTEM INFORMASI</option>
			<option value="S1 TEKNIK SIPIL">S1 TEKNIK SIPIL</option>
			<option value="S1 TEKNIK MESIN">S1 TEKNIK MESIN</option>
			<option value="S1 HUKUM">S1 HUKUM</option>
			<option value="S1 SASTRA INGGRIS">S1 SASTRA INGGRIS</option>
			<option value="S1 FARMASI">S1 FARMASI</option>
			<option value="S1 MATEMATIKA">S1 MATEMATIKA</option>


			</Select></p> 
			<p><input type="submit" name="go" value="Daftar"/>
				<input type="reset" name="del" value="Hapus" />
					</p>
						</table> </center>
								</form>
										</div>
												<script type="text/javascript">var myform = document.forms['myform'] myform.onsubmit = function() 


		{
			if 
				(this.elements['Nama'].value == '')
					{ alert('Nama belum diisi !'); }
				else if 
					(this.elements['Instansi'].value == '')
					{ alert('Instansi belum diisi !'); }
				else if 
					(this.elements['kategori'][0].checked == false && this.elements['kategori'][1].checked == false)
					{ alert('Kategori belum dipilih !'); }
				else 
					{ document.write('Sukses'; } return false;

	}
	</script>
			</body>
					<center><p><a href="index.php">
										[Home]
											</a>
											<a href="File daftar_menu.php">
										[Daftar Buku Tamu]
											</a>
											<a href="file_daftar_buku.php">
										[Daftar Peminjaman Buku]
											</a>
										
												</p></center>

</html>