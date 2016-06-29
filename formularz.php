<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Formularz</title>
	
	<script type="text/javascript">
	
		function znajdz_par(parafia){
			
			
			document.write()=parafia;
			
			
			
			
		}
	
	
	
	
	</script>
	
	
	
	
</head>

<body>
	
		Wpisz nazwe parafii: <input type="text" name="parafia"><br>
		<input type="submit" value="Submit" >
		
		"parafia"
	
	
	
<?php

	echo '[ <a href="logout.php">Wyloguj się!</a> ]</p>';
	
	
?>

</body>
</html>