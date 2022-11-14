<?php
	if ($_POST) {
		$id_jadkul=$_POST['id_jadkul'];
		$hari=$_POST['hari'];
		$jam=$_POST['jam'];
		$matkul=$_POST['matkul'];
		$dosen=$_POST['dosen'];


		if (empty($hari)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/jadkul/editjadkul.php';</script>";

		} elseif (empty($jam)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/jadkul/editjadkul.php';</script>";

		} elseif (empty($matkul)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/jadkul/editjadkul.php';</script>";

		}  elseif (empty($dosen)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/jadkul/editjadkul.php';</script>";

		}  else {
			include "../../assets/koneksi.php";
			$update=mysqli_query($koneksi, "update jadkul set hari='".$hari."', jam='".$jam."', id_matkul=
				'".$matkul."', id_dosen='".$dosen."' where id_jadkul ='".$id_jadkul."' ")
				or die(mysqli_error($koneksi));

			if ($update) {
				echo "<script>alert('Success editing the data');
				location.href='../../view/jadkul/datajadkul.php';</script>";
			} else {
				echo "<script>alert('Cannot edit this data');
				location.href='../../view/jadkul/editjadkul.php';</script>";

			}
	}
}
?>