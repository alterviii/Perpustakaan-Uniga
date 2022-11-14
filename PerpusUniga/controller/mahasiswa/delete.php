<?php  
	if ($_GET['id_mahasiswa']) {
		include "../../assets/koneksi.php";
		$qry_hapus = mysqli_query($koneksi,"delete from mahasiswa where id_mahasiswa= '".$_GET['id_mahasiswa']."'");
		if ($qry_hapus) {
			echo "<script>alert('Success Deleted Data');
			location.href='../../view/mahasiswa/datamahasiswa.php';</script>";
		}else{
			echo "<script>alert('Error Deleted Data');
			location.href='../../view/mahasiswa/datamahasiswa.php';</script>";
		}
	}
?>