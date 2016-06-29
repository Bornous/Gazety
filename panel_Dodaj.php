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
	<script src="panel_scripts.js"></script>		
	<link rel="import" href="szkielet/topbar.html" onload="handleLoad(event)" onerror="handleError(event)" 	id="tpbr">
	<link rel="import" href="szkielet/topmenu.html" onload="handleLoad(event)" onerror="handleError(event)" id="tpmn">
	<link rel="import" href="szkielet/options.html" onload="handleLoad(event)" onerror="handleError(event)" id="opt">
	<link rel="import" href="szkielet/footer.html" onload="handleLoad(event)" onerror="handleError(event)" id="ft">
		
		

	
	
</head>

<body>

	<div id="contener">
	
		<script>
		
			var doc = document.querySelector('link[id="tpbr"]').import;
			var text = doc.querySelector('#topbar');
			document.getElementById("contener").appendChild(text.cloneNode(true));
		
		
			doc = document.querySelector('link[id="tpmn"]').import;
			text = doc.querySelector('#topmenu');
			document.getElementById("contener").appendChild(text.cloneNode(true));
			
			 doc = document.querySelector('link[id="opt"]').import;
			 text = doc.querySelector('#options');
			document.getElementById("contener").appendChild(text.cloneNode(true));
			</script>
			
		<div id="main">
			<div style="min-height:400px;">
			
			<div id="formularz">
	
					<form action="panel_Dodaj-dodawanie.php" method="post" >
							
								Nazwa dekanatu: <select name="dekanat">
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
		
					<br></br>Nazwa parafii: <input type="text" name="parafia" />
					<br></br>
					<input type="submit" value="Zapisz nowy wiersz" class="glowna" style="font-size: 20px;" />
	
				</form>
			</div>
			
			</div>
			
			
		
		
			<div class="glowna"  onclick="panel()">Wróć do strony głównej </div>

		</div>
			
		
		<script>
		
			doc = document.querySelector('link[id="ft"]').import;
			 text = doc.querySelector('#footer');
			document.getElementById("contener").appendChild(text.cloneNode(true));
			
		</script>
			
	
     </div>

</body>
</html>