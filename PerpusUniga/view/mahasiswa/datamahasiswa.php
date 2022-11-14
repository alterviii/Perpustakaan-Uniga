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
	<h3>DATA MAHASISWA</h3>
	<a id="tambah" class="btn btn-outline-info" href="tambahmahasiswa.php">ADD</a>
	<table class="table table-striped table-dark" >
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>NIM</th>
				<th>ALAMAT</th>
				<th>USERNAME</th>
				<th>JURUSAN</th>
				<?php if ($_SESSION['level'] == "admin") {?>
				<th>AKSI</th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php
			include "../../assets/koneksi.php";
			$qry_mahasiswa=mysqli_query($koneksi, "select * from mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");
			$no=0;
			while ($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)) {
				$no++;
			?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_mahasiswa['nama']?></td>
				<td><?=$data_mahasiswa['nim']?></td>
				<td><?=$data_mahasiswa['alamat']?></td>
				<td><?=$data_mahasiswa['username']?></td>
				<td><?=$data_mahasiswa['nama_jurusan']?></td>
				<?php if ($_SESSION['level'] == "admin") {?>
				<td>
					<a href="editmahasiswa.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"class="btn btn-outline-info btn-sm">EDIT</a>
					<a href="../../controller/mahasiswa/delete.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"
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