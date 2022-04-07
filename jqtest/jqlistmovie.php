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
			  <b>List Movie</b>
			  <table>
				  <tr><td>
					  <input type='button' id='btnMovieAdd' value='Add' />
					  <input type='button' id='btnMovieEdit' value='Edit' />
					  <input type='button' id='btnMovieDelete' value='Delete' />
					  <input type='button' id='btnMovieRefresh' value='Refresh' />
				  </td></tr>
			  </table>
			  <hr />			  
			  <table id='tblmovie' class='display' style='width:100%'>
				<thead>
					<tr>
						<td>#</td>
						<td>Movie</td>
						<td>Title</td>
						<td align='right'>Rent Price</td>
					</tr>
				</thead>
				<tbody>
			 ";
		
		while ($row = mysqli_fetch_row($res)) {
			if (!is_null($row[4])) {
				$pic = "<img src='../movieimg/".$row[4]." width='100px'/>";
			} else {
				$pic = "No Picture";
			}
			echo "
				 <tr>
					<td width='20px'><input type='radio' name='rdoMovie' value=".$row[0]." /></td>
					<td>".$pic."</td>
					<td><b>".$row[1]."</b><br>Genre: ".$row[2]."</td>
					<td align='right'>".$row[3]."</td>
				 </tr>
				 ";
		}
		
		echo "</tbody>
			</table>";
	}
?>