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
	<title>Panel administratora</title>
	
	<link href="CSS/panel_styles_BETA.css" rel="stylesheet" type="text/css">
	
	<script>
		function flink() {
		window.location.href = "panel_BETA.php";
		}
		
		function panel() {
		window.location.href = "panel_BETA.php";
		}		
		
		
	</script>
	
	
</head>

<body>

	<div id="contener">
	
			<?php require("szkielet/topbar.php");?>
			<?php require("szkielet/topmenu.php");?>
			<?php require("szkielet/gazeta.php");?>
			<?php require("szkielet/options.php");?>
		
	
		
			<div id="main" class="<?php  
																	if(isset($_GET['name_gaz'])) $_SESSION['choose']=$_GET['name_gaz'];
																	if($_SESSION['choose']=='NIEDZIELA') echo 'bgcol_n_main';
																	else{
																			if($_SESSION['choose']=='GOŚĆ NIEDZIELNY') echo 'bgcol_gn_main';
																			else{
																					if($_SESSION['choose']=='MAŁY GOŚĆ NIEDZIELNY') echo 'bgcol_mgn_main';
																					else 	echo 'none_main';
																			}	
																	}
																	
																	?>">
			
					<br>
					<div style="padding: 10px; text-align:center;" >
					<form action="wyszukaj.php" method="post" >
					
						Nazwa dekanatu: <select name="dekanat">
									<option></option>
									<option>BEŁŻYCE</option>
									<option>BYCHAWA</option>
									<option>CHEŁM WSCHÓD</option>
									<option>CHEŁM ZACHÓD</option>
									<option>CZEMIERNIKI</option>
									<option>GARBÓW</option>
									<option>KAZIMIERZ DOLNY</option>
									<option>KONOPNICA</option>
									<option>KRASNYSTAW WSCHÓD</option>
									<option>KRASNYSTAW ZACHÓD</option>
									<option>KRAŚNIK</option>
									<option>LUBARTÓW</option>
									<option>LUBLIN PODMIEJSKI</option>
									<option>LUBLIN POŁUDNIE</option>
									<option>LUBLIN PÓŁNOC</option>
									<option>LUBLIN ŚRÓDMIEŚCIE</option>
									<option>LUBLIN WSCHÓD</option>
									<option>LUBLIN ZACHÓD</option>
									<option>ŁĘCZNA</option>
									<option>MICHÓW</option>
									<option>OPOLE LUBELSKIE</option>
									<option>PIASKI</option>
									<option>PUŁAWY</option>
									<option>SIEDLISZCZE</option>
									<option>ŚWIDNIK</option>
									<option>TUROBIN</option>
									<option>URZĘDÓW</option>
									<option>ZAKRZÓWEK</option>
									<option>INNE</option>
			
						</select>
						<br><br>
					
						Wpisz nazwę parafi: <input type="text"  name="parafia" >
					<br><br>
					<input type="submit" value="WYSZUKAJ"  class="option txtopt"  />
					
					</form>
					</div>
			
				<a href="panel_BETA.php"><div class="glowna" style="margin-top:215px; ">Wróć do strony głównej </div></a>

			</div>
		
			<?php require("szkielet/footer.php");?>
		
     </div>

</body>
</html>