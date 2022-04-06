
<?php

	session_start();
	
	include "../library/dbconnect.php";
	
	$movieid = $_GET["a"];

	
	$sql = "DELETE FROM tablemovie WHERE MOVIEID = '".$movieid."'";
	$res = runsqltext($sql);
	if ($res) {
		echo "1";
	} else {
		echo "0";
	}
	
?>