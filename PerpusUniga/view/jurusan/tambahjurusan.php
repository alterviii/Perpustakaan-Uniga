<?php
	include "../../assets/bootstrap.php";
	include "../../assets/navbar.php";
	include "../../assets/koneksi.php";
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
		<form id="tambaheditdata" action="../../controller/jurusan/prosestambah.php" method="post">
			Nama :
			<input type="text" name="nama_jurusan" value="" class="form-control">
			<input type="submit" name="simpan" value="Tambah jurusan" class="btn btn-outline-info" style="margin-top: 20px;">
			<a href="datajurusan.php" class="btn btn-outline-warning" 
			style="margin-top: 20px;">Kembali</a>
		</form>
</body>
</html>