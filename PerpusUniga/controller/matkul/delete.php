<?php  
	if ($_GET['id_matkul']) {
		include "../../assets/koneksi.php";
		$qry_hapus = mysqli_query($koneksi,"delete from matkul where id_matkul= '".$_GET['id_matkul']."'");
		if ($qry_hapus) {
			echo "<script>alert('Success Deleted Data');
			location.href='../../view/matkul/datamatkul.php';</script>";
		}else{
			echo "<script>alert('Error Deleted Data');
			location.href='../../view/matkul/datamatkul.php';</script>";
		}
	}
?>