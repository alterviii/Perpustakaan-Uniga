<?php
	include "../../assets/bootstrap.php";
	include "../../assets/navbar.php";
	include "../../assets/koneksi.php";
	$matkul = mysqli_query($koneksi,"SELECT * FROM matkul");
	$dosen = mysqli_query($koneksi,"SELECT * FROM dosen");
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
		<form id="tambaheditdata" action="../../controller/jadkul/prosestambah.php" method="post">
			Hari :
			<select name="hari" class="form-control">
              <option value="" disabled="" selected="">Pilih Hari</option>
              <option value="Senin">Senin</option>
              <option value="Selasa">Selasa</option>
              <option value="Rabu">Rabu</option>
              <option value="Kamis">Kamis</option>
              <option value="Jumat">Jumat</option>
              <option value="Sabtu">Sabtu</option>
            </select>
			Jam :
			<input type="time" name="jam" value="" class="form-control">
			Mata Kuliah :
			<select id="matkul" name="matkul" class="form-control">
				<option selected="" disabled=""> Pilih Mata Kuliah </option>
				<?php
				while ($row=mysqli_fetch_array($matkul)){ ?>
					<option value="<?=$row['id_matkul']?>"> <?=$row['nama_matkul']?> </option>
					<?php } ?>
			</select>
			Dosen :
			<select id="dosen" name="dosen" class="form-control">
				<option selected="" disabled=""> Pilih Dosen</option>
				<?php
				while ($row=mysqli_fetch_array($dosen)){ ?>
					<option value="<?=$row['id_dosen']?>"> <?=$row['nama_dosen']?> </option>
					<?php } ?>
			</select>
			<input type="submit" name="simpan" value="Tambah jadkul" class="btn btn-outline-info" style="margin-top: 20px;">
			<a href="datajadkul.php" class="btn btn-outline-warning" 
			style="margin-top: 20px;">Kembali</a>
		</form>
</body>
</html>