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
		$qry_get_jurusan=mysqli_query($koneksi, "select * from jurusan
			where id_jurusan = '". $_GET['id_jurusan']."' ");
		$data_jurusan=mysqli_fetch_array($qry_get_jurusan);
	?>
	<h3>Edit</h3>
	<form id="tambaheditdata" action="../../controller/jurusan/prosesedit.php" method="post">
		<input type="hidden" name="id_jurusan" value="<?=$data_jurusan['id_jurusan']?>">
		Nama :
		<input type="text" name="nama_jurusan" value="<?=$data_jurusan['nama_jurusan']?>" class="form-control">
		<input type="submit" name="simpan" value="Edit jurusan" class="btn btn-outline-info"
		style="margin-top: 20px;">
		<a href="datajurusan.php" class="btn btn-outline-warning" style="margin-top: 20px;">Kembali</a>
		</form>

</body>
</html>