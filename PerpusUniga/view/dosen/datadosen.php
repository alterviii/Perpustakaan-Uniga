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
	<h3>DATA DOSEN</h3>
	<a id="tambah" class="btn btn-outline-info" href="tambahdosen.php">ADD</a>
	<table class="table table-striped table-dark" >
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th>TELEPON</th>
				<?php if ($_SESSION['level'] == "admin") {?>
				<th>AKSI</th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php
			include "../../assets/koneksi.php";
			$qry_dosen=mysqli_query($koneksi, "select * from dosen");
			$no=0;
			while ($data_dosen=mysqli_fetch_array($qry_dosen)) {
				$no++;
			?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_dosen['nama_dosen']?></td>
				<td><?=$data_dosen['alamat']?></td>
				<td><?=$data_dosen['telepon']?></td>
				<?php if ($_SESSION['level'] == "admin") {?>
				<td>
					<a href="editdosen.php?id_dosen=<?=$data_dosen['id_dosen']?>"class="btn btn-outline-info btn-sm">EDIT</a>
					<a href="../../controller/dosen/delete.php?id_dosen=<?=$data_dosen['id_dosen']?>"
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