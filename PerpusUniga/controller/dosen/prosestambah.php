<?php
	if ($_POST) {
		$nama_dosen=$_POST['nama_dosen'];
		$alamat=$_POST['alamat'];
		$telepon=$_POST['telepon'];


		if (empty($nama_dosen)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/dosen/tambahdosen.php';</script>";

		}  elseif (empty($alamat)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/dosen/tambahdosen.php';</script>";

		}  elseif (empty($telepon)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/dosen/tambahdosen.php';</script>";

		}  else {
			include "../../assets/koneksi.php";
			$insert=mysqli_query($koneksi, "insert into dosen (nama_dosen,alamat,telepon) value
				('".$nama_dosen."','".$alamat."','".$telepon."')")
			or die(mysqli_error($koneksi));

			if ($insert) {
				echo "<script>alert('Success adding the data');
				location.href='../../view/dosen/datadosen.php';</script>";
			} else {
				echo "<script>alert('Cannot add this data');
				location.href='tambahdosen.php';</script>";

			}
		}
	}
?>