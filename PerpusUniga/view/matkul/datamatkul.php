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
	<h3>DATA MATA KULIAH</h3>
	<a id="tambah" class="btn btn-outline-info" href="tambahmatkul.php">ADD</a>
	<table class="table table-striped table-dark" >
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<?php if ($_SESSION['level'] == "admin") {?>
				<th>AKSI</th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php
			include "../../assets/koneksi.php";
			$qry_matkul=mysqli_query($koneksi, "select * from matkul");
			$no=0;
			while ($data_matkul=mysqli_fetch_array($qry_matkul)) {
				$no++;
			?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_matkul['nama_matkul']?></td>
				<?php if ($_SESSION['level'] == "admin") {?>
				<td>
					<a href="editmatkul.php?id_matkul=<?=$data_matkul['id_matkul']?>"class="btn btn-outline-info btn-sm">EDIT</a>
					<a href="../../controller/matkul/delete.php?id_matkul=<?=$data_matkul['id_matkul']?>"
					onclick= "return confirm('Are you sure want to delete this data?')"
					class="btn btn-outline-danger btn-sm">DELETE</a>
				</td>
				<?php } ?>
			</tr>
			<?php
			}
			 ?>
		</tbody>
	</table>

</body>
</html>