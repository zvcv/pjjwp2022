<?php
	session_start();
	
	include "../library/dbconnect.php";
	
	$movieid = $_GET["a"];
	$moviename = $_GET["b"];
	$genre = $_GET["c"];
	$price = $_GET["d"];
	
	$sql = "UPDATE tablemovie SET MOVIENAME = '".$moviename."', MOVIEGENRE = '".$genre."', MOVIEPRICE = ".$price." WHERE MOVIEID = '".$movieid."'";
	$res = runsqltext($sql);
	if ($res) {
		echo "1";
	} else {
		echo "0";
	}
	
?>