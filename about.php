<?php 
	require_once 'sql.php';
	
	$post_set = $_POST?1:0;
		
?>

<html>
	<head>
		
		<link rel="stylesheet" href="styles.css">
		
		<title>
			Massnahmenkatalog Frontend
		</title>		
		<script type="text/javascript" src = "selectdeselect.js"></script>
		<link href='fontawesome-free-5.15.4-web/css/all.css' rel="stylesheet">
	</head>
	<body>
		<div class="page-container">
			
			<?php
				include 'NavBar.php';
			?>
			
				<div class = "aboutContent">
					<h3  style = "width: 1000px; text-align: justify;"> Über </h3>
					<p style="margin-top: -15px;">
						Das Verbundprojekt R2Q - RessourcenPlan im Quartier - verfolgt das Ziel, die Verwendung der Ressourcen Wasser, Stoffe, Energie und Fläche/Raum im Quartier</strong> zu untersuchen.
						Aus diesen Erkenntnissen sollen Instrumente zur effizienten Bewirtschaftung dieser Ressourcen entwickelt werden.
						<br><br>
						Der Maßnahmenkatalog dient als Planungshilfe für PlanerInnen, die sich einen schnellen Überblick über Maßnahmen verschaffen wollen, die im Rahmen der Quartierstransformation im Quartier eingesetzt werden können.
						Es werden wichtige Aspekte zusammengefasst, die bei Planung, Bau und Betrieb beachtet werden müssen. Auch interdisziplinäre Synergien und Zielkonflikte werden thematisiert.
						<br>
						<!-- <div style='margin-top: 10px' ><div><strong>Hinweis:&nbsp;</strong></div> -->
									<div class='refMatrixDiv'>Weitergehende Informationen zum Verbundprojekt R2Q finden sie
									<a class='refMatrix' target='_blank'  href='https://www.fh-muenster.de/r2q'>HIER</a>
									</div>
					</p>
					
					<div class="row">
						<div class="column1">
							<img src="Stadt_Herne_new.png" alt="BMBF" style="width:50%">
						</div>
						
    				</div>

					<div class="row">
						<div class="column">
							<img src="BMBF.png" alt="BMBF" style="width:50%">
						</div>
						<div class="column">
							<img src="FONA.png" alt="FONA" style="width:50%">
						</div>
						<div class="column">
							<img src="RESZ.png" alt="RESZ" style="width:50%">
						</div>
    				</div>

					


				</div>
			<?php include 'footer.php'; ?>
			
		</div>
		
	</body>
</html>
