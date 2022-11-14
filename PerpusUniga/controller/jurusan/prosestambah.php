<?php
	if ($_POST) {
		$nama_jurusan=$_POST['nama_jurusan'];


		if (empty($nama_jurusan)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/jurusan/tambahjurusan.php';</script>";

		}else {
			include "../../assets/koneksi.php";
			$insert=mysqli_query($koneksi, "insert into jurusan (nama_jurusan) value ('".$nama_jurusan."')")
			or die(mysqli_error($koneksi));

			if ($insert) {
				echo "<script>alert('Success adding the data');
				location.href='../../view/jurusan/datajurusan.php';</script>";
			} else {
				echo "<script>alert('Cannot add this data');
				location.href='../../view/jurusan/tambahjurusan.php';</script>";

			}
		}
	}
?>