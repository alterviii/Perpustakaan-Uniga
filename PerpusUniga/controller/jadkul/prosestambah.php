<?php
	if ($_POST) {
		$hari=$_POST['hari'];
		$jam=$_POST['jam'];
		$matkul=$_POST['matkul'];
		$dosen=$_POST['dosen'];


		if (empty($hari)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/jadkul/tambahjadkul.php';</script>";

		} elseif (empty($jam)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/jadkul/tambahjadkul.php';</script>";

		} elseif (empty($matkul)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/jadkul/tambahjadkul.php';</script>";

		}  elseif (empty($dosen)) {
			echo "<script>alert('this field cant be empty');
			location.href='../../view/jadkul/tambahjadkul.php';</script>";
		}else {
			include "../../assets/koneksi.php";
			$insert=mysqli_query($koneksi, "insert into jadkul (hari,jam,id_matkul,id_dosen) value
				('".$hari."','".$jam."','".$matkul."','".$dosen."')")
			or die(mysqli_error($koneksi));

			if ($insert) {
				echo "<script>alert('Success adding the data');
				location.href='../../view/jadkul/datajadkul.php';</script>";
			} else {
				echo "<script>alert('Cannot add this data');
				location.href='tambahjadkul.php';</script>";

			}
		}
	}
?>