<?php
	if ($_POST) {
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$alamat=$_POST['alamat'];
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		$jurusan=$_POST['jurusan'];


		if (empty($nama)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/mahasiswa/tambahmahasiswa.php';</script>";

		} elseif (empty($nim)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/mahasiswa/tambahmahasiswa.php';</script>";

		} elseif (empty($alamat)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/mahasiswa/tambahmahasiswa.php';</script>";

		}  elseif (empty($username)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/mahasiswa/tambahmahasiswa.php';</script>";

		}  elseif (empty($pass)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/mahasiswa/tambahmahasiswa.php';</script>";

		}  elseif (empty($jurusan)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/mahasiswa/tambahmahasiswa.php';</script>";

		}else {
			include "../../assets/koneksi.php";
			$insert=mysqli_query($koneksi, "insert into mahasiswa (nama,nim,alamat,username,pass,id_jurusan) value
				('".$nama."','".$nim."','".$alamat."','".$username."','".$pass."','".$jurusan."')")
			or die(mysqli_error($koneksi));

			if ($insert) {
				echo "<script>alert('Success adding the data');
				location.href='../../view/mahasiswa/datamahasiswa.php';</script>";
			} else {
				echo "<script>alert('Cannot add this data');
				location.href='tambahmahasiswa.php';</script>";

			}
		}
	}
?>