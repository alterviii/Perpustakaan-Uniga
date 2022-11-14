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
		$qry_get_matkul=mysqli_query($koneksi, "select * from matkul
			where id_matkul = '". $_GET['id_matkul']."' ");
		$data_matkul=mysqli_fetch_array($qry_get_matkul);
	?>
	<h3>Edit</h3>
	<form id="tambaheditdata" action="../../controller/matkul/prosesedit.php" method="post">
		<input type="hidden" name="id_matkul" value="<?=$data_matkul['id_matkul']?>">
		Nama :
		<input type="text" name="nama_matkul" value="<?=$data_matkul['nama_matkul']?>" class="form-control">
		<input type="submit" name="simpan" value="Edit matkul" class="btn btn-outline-info"
		style="margin-top: 20px;">
		<a href="datamatkul.php" class="btn btn-outline-warning" style="margin-top: 20px;">Kembali</a>
		</form>

</body>
</html>