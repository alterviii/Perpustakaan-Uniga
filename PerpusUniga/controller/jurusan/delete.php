<?php  
	if ($_GET['id_jurusan']) {
		include "../../assets/koneksi.php";
		$qry_hapus = mysqli_query($koneksi,"delete from jurusan where id_jurusan= '".$_GET['id_jurusan']."'");
		if ($qry_hapus) {
			echo "<script>alert('Success Deleted Data');
			location.href='../../view/jurusan/datajurusan.php';</script>";
		}else{
			echo "<script>alert('Error Deleted Data');
			location.href='../../view/jurusan/datajurusan.php';</script>";
		}
	}
?>