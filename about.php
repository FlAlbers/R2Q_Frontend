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
						<div class='refMatrixDiv'>Weitergehende Informationen zum Verbundprojekt R2Q finden sie
						<a class='refMatrix' target='_blank'  href='https://www.fh-muenster.de/r2q'>HIER</a>
						</div>
					</p>
						<!-- <div style='margin-top: 10px' ><div><strong>Hinweis:&nbsp;</strong></div> -->
					<h4 style="margin-top: -5px;">Creative Commons Lizenz</h4>

					<p style="margin-top: -3px;">
						Diese Plattform ist unter einer Open Access Creative Commons CC BY 4.0-Lizenz lizenziert (<a rel='license' href='http://creativecommons.org/licenses/by/4.0/'>Creative Commons Attribution 4.0 International License</a>). Das bedeutet, dass die Steckbriefe kostenlos herunterladen und gelesen werden können. Darüber hinaus dürfen die Dokumente wiederverwendet und zitiert werden, sofern die veröffentlichte Originalversion zitiert wird.
						<br><br>Die Originalversion kann zitiert werden als:
						<br>"Birgitta Hörnschemeyer, Jonas Kleckers, Celestin J. Stretz, Christian Klemm, Janik Budde, Rosalie Arendt, Mareike Lewe, Flemming Albers (2023). Leitfaden RessourcenPlan – Teil 3.3: Maßnahmen des Quartiersmanagements: Maßnahmensteckbriefe. Ergebnisse des Projekts R2Q RessourcenPlan im Quartier. Münster: FH Münster, IWARU Institut für Infrastruktur·Wasser·Ressourcen·Umwelt (Hrsg)."
						<br><br>
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
