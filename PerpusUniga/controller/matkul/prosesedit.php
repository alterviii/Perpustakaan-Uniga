<?php
	if ($_POST) {
		$id_matkul=$_POST['id_matkul'];
		$nama_matkul=$_POST['nama_matkul'];


		if (empty($nama_matkul)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/matkul/editmatkul.php';</script>";

		} else {
			include "../../assets/koneksi.php";
			$update=mysqli_query($koneksi, "update matkul set nama_matkul='".$nama_matkul."' where id_matkul ='".$id_matkul."'")
				or die(mysqli_error($koneksi));

			if ($update) {
				echo "<script>alert('Success editing the data');
				location.href='../../view/matkul/datamatkul.php';</script>";
			} else {
				echo "<script>alert('Cannot edit this data');
				location.href='edithmatkul.php';</script>";

			}
		}
	}
?>