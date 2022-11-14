<?php  
	if ($_GET['id_jadkul']) {
		include "../../assets/koneksi.php";
		$qry_hapus = mysqli_query($koneksi,"delete from jadkul where id_jadkul= '".$_GET['id_jadkul']."'");
		if ($qry_hapus) {
			echo "<script>alert('Success Deleted Data');
			location.href='../../view/jadkul/datajadkul.php';</script>";
		}else{
			echo "<script>alert('Error Deleted Data');
			location.href='../../view/jadkul/datajadkul.php';</script>";
		}
	}
?>