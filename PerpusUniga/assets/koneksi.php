<?php
	$koneksi = mysqli_connect('localhost','root','','perpusuniga');

	if (mysqli_connect_error()) {
		printf("connect failed:", mysqli_connect_error());
		exit();
	}

?>