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
	<?php
		$qry_get_mahasiswa=mysqli_query($koneksi, "select * from mahasiswa
			where id_mahasiswa = '". $_GET['id_mahasiswa']."' ");
		$data_mahasiswa=mysqli_fetch_array($qry_get_mahasiswa);
	?>
	<h3>Edit</h3>
	<form id="tambaheditdata" action="../../controller/mahasiswa/prosesedit.php" method="post">
		<input type="hidden" name="id_mahasiswa" value="<?=$data_mahasiswa['id_mahasiswa']?>">
		Nama :
		<input type="text" name="nama" value="<?=$data_mahasiswa['nama']?>" class="form-control">
		NIM :
		<input type="text" name="nim" value="<?=$data_mahasiswa['nim']?>" class="form-control">
		Alamat :
		<input type="text" name="alamat" value="<?=$data_mahasiswa['alamat']?>" class="form-control">
		UserName :
		<input type="text" name="username" value="<?=$data_mahasiswa['username']?>" class="form-control">
		Jurusan :
		<select id="jurusan" name="jurusan" class="form-control">
			<?php
			while ($row=mysqli_fetch_array($jurusan)){ ?>
				<option value="<?=$row['id_jurusan']?>"
				<?=$data_mahasiswa['id_jurusan'] == $row['id_jurusan'] ? 'selected' : null?> 
				> <?=$row['nama_jurusan']?> </option>
				<?php } ?>
		</select>
		<input type="submit" name="simpan" value="Edit Mahasiswa" class="btn btn-outline-info"
		style="margin-top: 20px;">
		<a href="datamahasiswa.php" class="btn btn-outline-warning" style="margin-top: 20px;">Kembali</a>
		</form>

</body>
</html>