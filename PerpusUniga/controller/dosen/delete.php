<?php  
	if ($_GET['id_dosen']) {
		include "../../assets/koneksi.php";
		$qry_hapus = mysqli_query($koneksi,"delete from dosen where id_dosen= '".$_GET['id_dosen']."'");
		if ($qry_hapus) {
			echo "<script>alert('Success Deleted Data');
			location.href='../../view/dosen/datadosen.php';</script>";
		}else{
			echo "<script>alert('Error Deleted Data');
			location.href='../../view/dosen/datadosen.php';</script>";
		}
	}
?>