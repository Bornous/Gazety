<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
	if (!isset($_GET['row']) OR !isset($_SESSION['choose']) OR !isset($_SESSION['wyn_zestaw']))
	{
		$_SESSION['choose']=$_GET['name_gaz'];
		header('Location: panel_Znajdz.php');
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
	<script src="jquery/jquery-1.11.1.min.js"></script>

	
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
			<div><?php foreach($_SESSION['wyn_zestaw'] as $row){
										if($_GET['row']==$row[0]){
								?>
								
									<div id="resultt" >
										<div class="kol1">Dekanat: </div><div class="kol2"><?php echo $row[1] ?></div><div class="kol3"></div>
										<div class="kol1">Parafia: </div><div class="kol2"><?php echo $row[2] ; ?></div><div class="kol3"></div>
										<div class="kol1">Nadział: </div><div class="kol2"><?php echo $row[3] ?></div><div class="kol3"></div>
										<div  class="kol1">Zwrot:</div><div class="kol2"><?php echo $row[4] ?></div><div class="kol3"></div>
										<div class="kol1">Do zapłaty: </div><div class="kol2"><?php echo $row[5] ?> zł</div><div class="kol3"></div>
										
									</div>
								
								<?php
								
			}	}?>	</div>
			<?php unset($_SESSION['wyn_zestaw']);?>
		
			<div class="option drukuj" onclick="PrintElem('#resultt','nazwa_gazety')" >WYDRUKUJ</div>

		</div>
	
	
		<div id="footer">
	
			<a href="logout.php">[Wyloguj się]</a> 

		</div>
	
     </div>

</body>
</html>