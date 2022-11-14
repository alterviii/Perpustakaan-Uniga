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
	<h3>DATA JURUSAN</h3>
	<a id="tambah" class="btn btn-outline-info" href="tambahjurusan.php">ADD</a>
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
			$qry_jurusan=mysqli_query($koneksi, "select * from jurusan");
			$no=0;
			while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
				$no++;
			?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_jurusan['nama_jurusan']?></td>
				<?php if ($_SESSION['level'] == "admin") {?>
				<td>
					<a href="editjurusan.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>"class="btn btn-outline-info btn-sm">EDIT</a>
					<a href="../../controller/jurusan/delete.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>"
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