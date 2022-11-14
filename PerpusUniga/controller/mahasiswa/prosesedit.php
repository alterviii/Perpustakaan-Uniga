<?php
	if ($_POST) {
		$id_mahasiswa=$_POST['id_mahasiswa'];
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$alamat=$_POST['alamat'];
		$username=$_POST['username'];
		$jurusan=$_POST['jurusan'];


		if (empty($nama)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/mahasiswa/editmahasiswa.php';</script>";

		} elseif (empty($nim)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/mahasiswa/editmahasiswa.php';</script>";

		} elseif (empty($alamat)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/mahasiswa/editmahasiswa.php';</script>";

		}  elseif (empty($username)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/mahasiswa/editmahasiswa.php';</script>";

		}	elseif (empty($jurusan)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/mahasiswa/editmahasiswa.php';</script>";

		} else {
			include "../../assets/koneksi.php";
			if (empty($pass)) {
			$update=mysqli_query($koneksi, "update mahasiswa set nama='".$nama."', nim='".$nim."', alamat=
				'".$alamat."', username='".$username."', id_jurusan='".$jurusan."' where id_mahasiswa ='".$id_mahasiswa."'")
				or die(mysqli_error($koneksi));

			if ($update) {
				echo "<script>alert('Success editing the data');
				location.href='../../view/mahasiswa/datamahasiswa.php';</script>";
			} else {
				echo "<script>alert('Cannot edit this data');
				location.href='../../view/mahasiswa/editmahasiswa.php';</script>";

			}
		}
	}
}
?>