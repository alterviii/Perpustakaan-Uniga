<?php
	include "../../assets/bootstrap.php";
	include "../../assets/navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../assets/style.css">
	<meta charset="utf-8">
	<title>Perpustakaan</title>
</head>
<body>
	<h3>DATA JADWAL KULIAH</h3>
	<a id="tambah" class="btn btn-outline-info" href="tambahjadkul.php">ADD</a>
	<table class="table table-striped table-dark" >
		<thead>
			<tr>
				<th>NO</th>
				<th>HARI</th>
				<th>JAM</th>
				<th>MATA KULIAH</th>
				<th>DOSEN</th>
				<?php if ($_SESSION['level'] == "admin") {?>
				<th>AKSI</th>
				<?php }?>
			</tr>
		</thead>
		<tbody>
			<?php
			include "../../assets/koneksi.php";
			$qry_jadkul=mysqli_query($koneksi,"select * from jadkul 
				INNER JOIN matkul on matkul.id_matkul=jadkul.id_matkul
				INNER JOIN dosen on dosen.id_dosen=jadkul.id_dosen");
			$no=0;
			while ($data_jadkul=mysqli_fetch_array($qry_jadkul)) {
				$no++;
			?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_jadkul['hari']?></td>
				<td><?=$data_jadkul['jam']?></td>
				<td><?=$data_jadkul['nama_matkul']?></td>
				<td><?=$data_jadkul['nama_dosen']?></td>
				<?php if ($_SESSION['level'] == "admin") {?>
				<td>
					<a href="editjadkul.php?id_jadkul=<?=$data_jadkul['id_jadkul']?>"class="btn btn-outline-info btn-sm">EDIT</a>
					<a href="../../controller/jadkul/delete.php?id_jadkul=<?=$data_jadkul['id_jadkul']?>"
					onclick= "return confirm('Are you sure want to delete this data?')"
					class="btn btn-outline-danger btn-sm">DELETE</a>
				</td>
				<?php }?>
			</tr>
			<?php
			}
			 ?>
		</tbody>
	</table>

</body>
</html>