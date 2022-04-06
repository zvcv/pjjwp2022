<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Expires" content="Mon, 20 Dec 1998 01:00:00 GMT" />
		<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		
		<title>Belajar Web App - Diklat I - 2022</title>
		<link id="icon" rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
		
		<script type="text/javascript" src="library/mainfunction.js"></script>
		<link rel="stylesheet" type="text/css" href="library/common.css" />
	</head>

	<body>
		<?php
		
			if (isset($_SESSION["isLogin"])) {
				$login = $_SESSION["isLogin"];
			} else {
				$login = 0;
			}
		
			if ($login == 0) {
				include "uiuxjavalogin.php";
			} else {
				include "uiuxjavamain.php";
			}
			
		
		?>
	</body>
</html>