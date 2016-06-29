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
	<meta Content-type: text/html; charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Dodawanie wiersza</title>
</head>

<body>
	
<?php
	//$_SESSION['dekanat'] = $_POST['dekanat'];
	//echo "Dodawany dekanat to: ".$_SESSION['dekanat'];
	$pol_par = @new mysqli("localhost", "root","","gazety");
	mysqli_query($pol_par,"SET NAMES utf8");
	
	
	if ($pol_par->connect_errno!=0)
	{
		echo "Error: ".$pol_par->connect_errno;
	}
	else{
		$dekanat=$_POST['dekanat'];
		$parafia=trim($_POST['parafia']);
		//$parafia=htmlentities($parafia, ENT_QUOTES, "UTF-8");
		$parafia=mb_convert_case($parafia, MB_CASE_UPPER, "UTF-8");
		
		
		$dodanie = @mysqli_query($pol_par,"INSERT INTO `zwroty` (`id_par`, `dekanat`, `parafia`, `nadzial`, `zwrot`, `sprzedaz`) VALUES (NULL, '$dekanat', '$parafia', '0', '0', '0')");
		if($dodanie) 	echo "Rekord został dodany poprawnie";
		else 			echo "Błąd nie udało się dodać nowego rekordu"; 
		
		$pol_par->close();
	}
	
	
	echo '<br></br>[ <a href="panel.php"> Wróć do panelu administratora </a> ]</p>';
	

	
	
	
?>

</body>
</html>