<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	/*
	if(!isset($_SESSION['pol'])){
							//Połączenie z bazą danych
							$_SESSION['pol'] = @new mysqli("localhost", "root","","gazety");
							mysqli_query($_SESSION['pol'],"SET NAMES UTF8");
	}
	*/
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Panel administratora</title>
	
	<link href="CSS/panel_styles_BETA.css" rel="stylesheet" type="text/css">
	<script src="panel_scripts.js"></script>
	
	
</head>

<body onload="daty()">

	<div id="contener">
	
			<?php require("szkielet/topbar.php");?>
			<?php require("szkielet/topmenu.php");?>
			<?php require("szkielet/gazeta.php");?>
			<?php require("szkielet/options.php");?>
			<?php require("szkielet/main.php");?>
			<?php require("szkielet/footer.php");?>
			
     </div>

</body>
</html>