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
	<?php
		$qry_get_jadkul=mysqli_query($koneksi, "select * from jadkul
			where id_jadkul = '". $_GET['id_jadkul']."' ");
		$data_jadkul=mysqli_fetch_array($qry_get_jadkul);
	?>
	<h3>Edit</h3>
	<form id="tambaheditdata" action="../../controller/jadkul/prosesedit.php" method="post">
	<input type="hidden" name="id_jadkul" value="<?=$data_jadkul['id_jadkul']?>">
		Hari :
		<select name="hari" class="form-control">
            <option value="<?=$data_jadkul['id_jadkul']?>">
            	<?=$data_jadkul['hari']?>
            </option>
            <option value="" disabled=""></option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
            </select>
		Jam :
		<input type="time" name="jam" value="<?=$data_jadkul['jam']?>" class="form-control">
		Mata Kuliah :
		<select id="matkul" name="matkul" class="form-control">
			<?php
			while ($row=mysqli_fetch_array($matkul)){ ?>
				<option value="<?=$row['id_matkul']?>"
				<?=$data_jadkul['id_matkul'] == $row['id_matkul'] ? 'selected' : null?> 
				> <?=$row['nama_matkul']?> </option>
				<?php } ?>
		</select>
		Dosen :
		<select id="dosen" name="dosen" class="form-control">
			<?php
			while ($row=mysqli_fetch_array($dosen)){ ?>
				<option value="<?=$row['id_dosen']?>"
				<?=$data_jadkul['id_dosen'] == $row['id_dosen'] ? 'selected' : null?> 
				> <?=$row['nama_dosen']?> </option>
				<?php } ?>
		</select>
		<input type="submit" name="simpan" value="Edit jadkul" class="btn btn-outline-info"
		style="margin-top: 20px;">
		<a href="datajadkul.php" class="btn btn-outline-warning" style="margin-top: 20px;">Kembali</a>
		</form>

</body>
</html>