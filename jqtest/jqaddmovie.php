<?php
	session_start();
	
	include "../library/dbconnect.php";

	if (isset($_FILES['file']['name'])) {
		$filename = $_FILES['file']['name'];
		$tempdestinationfile = "../movieimg/".$filename;
		$ext = pathinfo($tempdestinationfile,PATHINFO_EXTENSION);
	
		$moviename = $_POST["a"];
		$genre = $_POST["b"];
		$price = $_POST["c"];
		
		$todaytime = date("Y-m-d H:i:s");
		$movieid = strtoupper(md5($moviename.$todaytime));
		$destinationfile = $movieid.".".$ext;
		$destinationfileloc = "../movieimg/".$destinationfile;

		if (move_uploaded_file($_FILES['file']['tmp_name'],$destinationfileloc)) {
			$sql = "INSERT INTO tablemovie VALUES ('".$movieid."','".$moviename."','".$genre."',".$price.",'".$destinationfile."')";
			$res = runsqltext($sql);
			if ($res) {
				echo "1";
			} else {
				echo "0";
			}
		} else {
			echo "0";
		}		

	} else {
		echo "0";
	}
	
?>