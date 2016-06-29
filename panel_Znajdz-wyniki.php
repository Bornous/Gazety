<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']) )
	{
		
		header('Location: panel_BETA.php');
		exit();
	}
	
	if(!isset($_SESSION['komunikat']))
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
		<script>
		var liczba;
		function panel(liczba)	{
			if(liczba==1)window.location.href = "panel_Znajdz.php?name_gaz=MAŁY+GOŚĆ+NIEDZIELNY";
			if(liczba==2)window.location.href = "panel_Znajdz.php?name_gaz=GOŚĆ+NIEDZIELNY";
			if(liczba==3)window.location.href = "panel_Znajdz.php?name_gaz=NIEDZIELA";
				
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
		
				<div class="aabb">
				
					<?php
						//Wyświetlenie
						if(isset($_SESSION['komunikat'])) echo $_SESSION['komunikat'];
						
						unset($_SESSION['komunikat']);
											
							if(isset($_SESSION['wyn_n'])){	
								?>
								<br />
								<div class="tab t0" >
										<div class="mtab t0">DEKANAT</div>
										<div class="mtab t0" >PARAFIA</div>
										<div class="mtab2 t0" >N</div>
										<div class="mtab2 t0" >Z</div>
										<div class="mtab3 t0" >S</div>
										<div style="clear:both;"></div>
									</div>
								<?php
								//Wyswietlanie wynikow - sposób 2
								foreach ($_SESSION['wyn_zestaw'] as $row) {	
								?>
								<a href="panel_druczek.php<?php echo '?row='.$row[0];?>"  class="dodruk">
									<div class="tab" >
										<div class="mtab"><?php echo $row[1] ?></div>
										<div class="mtab" ><?php
											if(strlen($row[2])<=24)
											echo $row[2] ;
											else {?>
												<div style="font-size:17px;">
													<?php
													echo $row[2] ;
													?>
												</div>
													
												<?php	
											}
										?></div>
										<div class="mtab2" ><?php echo $row[3] ?></div>
										<div class="mtab2" ><?php echo $row[4] ?></div>
										<div class="mtab3" ><?php echo $row[5] ?></div>
										<div style="clear:both;"></div>
									</div>
								</a>	
								<?php
								
								}		
								
								//unset($_SESSION['wyn_zestaw']);
								unset($_SESSION['wyn_n']);
							}
							?>
					
				</div>
		
			<a href="panel_Znajdz.php"><div class="glowna" >Wróć do strony wyszukiwania</div></a>
			<a href="panel_BETA.php"><div class="glowna" >Wróć do strony głównej </div></a>

		</div>
	
	
		<?php require("szkielet/footer.php");?>
	
     </div>

</body>
</html>