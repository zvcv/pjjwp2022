<?php
	session_start();
	
	include "../library/dbconnect.php";
	
	$sql = "SELECT * FROM tablemovie";
	$res = runsqltext($sql);
	$numrow = mysqli_num_rows($res);
	
	if ($numrow < 1) {
		echo "Data movie tidak tersedia";
	} else {		
		echo "
			  <h2>List Movie</h2>
			  <table border=1 cellpadding='5' cellspacing='0' width=100%>
				<tr>
					<td>ID</td>
					<td>Title</td>
					<td>Genre</td>
					<td align='right'>Rent Price</td>
				</tr>
			 ";
		
		while ($row = mysqli_fetch_row($res)) {
			echo "
				 <tr>
					<td>".$row[0]."</td>
					<td>".$row[1]."</td>
					<td>".$row[2]."</td>
					<td align='right'>".$row[3]."</td>
				 </tr>
				 ";
		}
	}
?>