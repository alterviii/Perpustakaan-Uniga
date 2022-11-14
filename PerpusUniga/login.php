<?php 

session_start();

include 'assets/koneksi.php';
 
$username = $_POST['username'];
$pass = $_POST['pass'];
 
$login = mysqli_query($koneksi, "SELECT * FROM user where username='$username' and pass='$pass'");
$ceknotip = mysqli_num_rows($login);
	
	if ($ceknotip > 0) {

		$data = mysqli_fetch_assoc($login);

			if ($data['level']=="admin") {
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "admin";

				header("location:view/mahasiswa/datamahasiswa.php");

			}elseif ($data['level']=="petugas") {
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "petugas";

				header("location:view/mahasiswa/datamahasiswa.php");

			}else{
				$_SESSION['gagal'] ="";
				header("location:index.php");
			}
	} else {
		$_SESSION['gagal'] ="";
		header("location:index.php");
	}
?>