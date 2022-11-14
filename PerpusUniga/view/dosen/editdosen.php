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
	<?php
		$qry_get_dosen=mysqli_query($koneksi, "select * from dosen
			where id_dosen = '". $_GET['id_dosen']."' ");
		$data_dosen=mysqli_fetch_array($qry_get_dosen);
	?>
	<h3>Edit</h3>
	<form id="tambaheditdata" action="../../controller/dosen/prosesedit.php" method="post">
		<input type="hidden" name="id_dosen" value="<?=$data_dosen['id_dosen']?>">
		Nama :
		<input type="text" name="nama_dosen" value="<?=$data_dosen['nama_dosen']?>" class="form-control">
		Alamat :
		<input type="text" name="alamat" value="<?=$data_dosen['alamat']?>" class="form-control">
		Telepon :
		<input type="text" name="telepon" value="<?=$data_dosen['telepon']?>" class="form-control">
		<input type="submit" name="simpan" value="Edit dosen" class="btn btn-outline-info"
		style="margin-top: 20px;">
		<a href="datadosen.php" class="btn btn-outline-warning" style="margin-top: 20px;">Kembali</a>
		</form>

</body>
</html>