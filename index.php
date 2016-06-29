<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: formularz.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Strona glowna</title>
</head>

<body>
	
	<h1 style='margin:7% 30% 1% 30%;'>Zaloguj sie</h1>
	
	<form action="zaloguj.php" method="post" style='margin:1% 30% 20% 30%;' >
	
		Login: <br /> <input type="text" name="login" /> <br />
		Haslo: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj się" />
	
	</form>
	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>