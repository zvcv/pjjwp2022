<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Expires" content="Mon, 20 Dec 1998 01:00:00 GMT" />
		<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		
		<title>Husni A Ulinnuha | Tugas UI UX</title>
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/840/840523.png">
        <!-- <a href="https://www.flaticon.com/free-icons/nuclear" title="nuclear icons">Nuclear icons created by Freepik - Flaticon</a> -->
		
		<script type="text/javascript" src="jquery/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="library/mainfunctionjquery.js"></script>
		<script type="text/javascript" src="datatables/datatables.min.js"></script>
		
		<link rel="stylesheet" href="datatables/datatables.min.css">
		<link rel="stylesheet" href="jquery/jquery-ui.min.css">
		<link rel="stylesheet" href="library/stylecombined.css">
		
	</head>

	<body>
		<?php
		
			if (isset($_SESSION["isLogin"])) {
				$login = $_SESSION["isLogin"];
			} else {
				$login = 0;
			}
		
			if ($login == 0) {
				include "uiuxjquerylogin.php";
			} else {
				include "uiuxjquerymain.php";
			}
			
		
		?>
	</body>
</html>