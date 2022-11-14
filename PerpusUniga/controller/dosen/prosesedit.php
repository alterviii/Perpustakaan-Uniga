<?php
	if ($_POST) {
		$id_dosen=$_POST['id_dosen'];
		$nama_dosen=$_POST['nama_dosen'];
		$alamat=$_POST['alamat'];
		$telepon=$_POST['telepon'];


		if (empty($nama_dosen)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/dosen/editdosen.php';</script>";

		} elseif (empty($alamat)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/dosen/editdosen.php';</script>";

		}  elseif (empty($telepon)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/dosen/editdosen.php';</script>";

		} else {
			include "../../assets/koneksi.php";
			$update=mysqli_query($koneksi, "update dosen set nama_dosen='".$nama_dosen."', alamat=
				'".$alamat."', telepon='".$telepon."' where id_dosen ='".$id_dosen."' ")
				or die(mysqli_error($koneksi));

			if ($update) {
				echo "<script>alert('Success editing the data');
				location.href='../../view/dosen/datadosen.php';</script>";
			} else {
				echo "<script>alert('Cannot edit this data');
				location.href='../../view/dosen/edithdosen.php';</script>";

			}
	}
}
?>