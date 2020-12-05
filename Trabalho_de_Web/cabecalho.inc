<?php
	$con = mysqli_connect("localhost", "Lorena Nunziato", "Lo_678901");
	mysqli_set_charset($con,"utf8");
	if(!$con) {
		echo mysqli_connect_error($con);
	}

	$db = mysqli_select_db($con, "cadastro");
	if(!$db) {
		echo mysqli_error($con);
	}
?>