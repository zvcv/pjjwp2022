<?php
	session_start();
	
	include "../library/dbconnect.php";
	
	$moviename = $_GET["a"];
	$genre = $_GET["b"];
	$price = $_GET["c"];
	
	$todaytime = date("Y-m-d H:i:s");
	$movieid = strtoupper(md5($moviename.$todaytime));
	
	$sql = "INSERT INTO tablemovie VALUES ('".$movieid."','".$moviename."','".$genre."',".$price.")";
	$res = runsqltext($sql);
	if ($res) {
		echo "1";
	} else {
		echo "0";
	}
	
?>