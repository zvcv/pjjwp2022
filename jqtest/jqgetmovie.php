<?php
	session_start();
	
	include "../library/dbconnect.php";
	
	$movieid = $_GET["a"];
	
	$sql = "SELECT * FROM tablemovie WHERE MOVIEID = '".$movieid."'";
	$res = runsqltext($sql);
	if ($res) {
		$row = mysqli_fetch_row($res);
		echo $row[0]."|".$row[1]."|".$row[2]."|".$row[3];
	} else {
		echo "0";
	}
	
?>