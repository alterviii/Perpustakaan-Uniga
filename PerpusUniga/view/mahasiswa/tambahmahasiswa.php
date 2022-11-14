<?php
	include "../../assets/bootstrap.php";
	include "../../assets/navbar.php";
	include "../../assets/koneksi.php";
	$jurusan = mysqli_query($koneksi,"SELECT * FROM jurusan");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../assets/style.css">
	<meta charset="utf-8">
	<title>Perpustakaan</title>
</head>
<body style="width: 50%;">
		<h3>TAMBAH DATA</h3>
		<form id="tambaheditdata" action="../../controller/mahasiswa/prosestambah.php" method="post">
			Nama :
			<input type="text" name="nama" value="" class="form-control">
			NIM :
			<input type="text" name="nim" value="" class="form-control">
			Alamat :
			<input type="text" name="alamat" value="" class="form-control">
			UserName :
			<input type="text" name="username" value="" class="form-control">
			Password :
			<input type="Password" name="pass" value="" class="form-control">
			Jurusan :
			<select id="jurusan" name="jurusan" class="form-control">
				<option selected="" disabled=""> Pilih Jurusan </option>
				<?php
				while ($row=mysqli_fetch_array($jurusan)){ ?>
					<option name="jurusan" value="<?=$row['id_jurusan']?>"> <?=$row['nama_jurusan']?> </option>
					<?php } ?>
			</select>

			<input type="submit" name="simpan" value="Tambah Mahasiswa" class="btn btn-outline-info" style="margin-top: 20px;">
			<a href="datamahasiswa.php" class="btn btn-outline-warning" 
			style="margin-top: 20px;">Kembali</a>
		</form>
</body>
</html>