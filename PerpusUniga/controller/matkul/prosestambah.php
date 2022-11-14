<?php
	if ($_POST) {
		$nama_matkul=$_POST['nama_matkul'];


		if (empty($nama_matkul)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/matkul/tambahmatkul.php';</script>";

		}else {
			include "../../assets/koneksi.php";
			$insert=mysqli_query($koneksi, "insert into matkul (nama_matkul) value ('".$nama_matkul."')")
			or die(mysqli_error($koneksi));

			if ($insert) {
				echo "<script>alert('Success adding the data');
				location.href='../../view/matkul/datamatkul.php';</script>";
			} else {
				echo "<script>alert('Cannot add this data');
				location.href='../../view/matkul/tambahmatkul.php';</script>";

			}
		}
	}
?>