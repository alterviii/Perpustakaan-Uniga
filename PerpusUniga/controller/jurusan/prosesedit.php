<?php
	if ($_POST) {
		$id_jurusan=$_POST['id_jurusan'];
		$nama_jurusan=$_POST['nama_jurusan'];


		if (empty($nama_jurusan)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/jurusan/editjurusan.php';</script>";

		} else {
			include "../../assets/koneksi.php";
			$update=mysqli_query($koneksi, "update jurusan set nama_jurusan='".$nama_jurusan."' where id_jurusan ='".$id_jurusan."'")
				or die(mysqli_error($koneksi));

			if ($update) {
				echo "<script>alert('Success editing the data');
				location.href='../../view/jurusan/datajurusan.php';</script>";
			} else {
				echo "<script>alert('Cannot edit this data');
				location.href='edithjurusan.php';</script>";

			}
		}
	}
?>