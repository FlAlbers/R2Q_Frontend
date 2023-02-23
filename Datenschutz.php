<?php 
	require_once 'sql.php';
	
	$post_set = $_POST?1:0;
	// $file_to_read = fopen('Bildverweise_Test.CSV', 'r');
	// $bildref = fgetcsv($file_to_read, NULL, ";" )

	
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
			
			<div class="mainContent">
				<!-- <div class = "filters">
					<?php
						// include 'filters.php';
					?>
				</div> -->
				<div class = "refContent">
				<div style="clear: both;">
      
	  <div>h3
	  <h3 id="a00">Datenschutzerklärung</h3>
			  <h5 id="a00">1. Datenschutz auf einen Blick</h5>
  
  <div>
    
			  <div><h4 style="color:black">Allgemeine Hinweise</h4>
  <p>Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen Daten passiert, wenn Sie unsere Website besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie persönlich identifiziert werden können. Ausführliche Informationen zum Thema Datenschutz entnehmen Sie unserer unter diesem Text aufgeführten Datenschutzerklärung.</p>
  <h4 style="color:black">Datenerfassung auf unserer Website</h4>
  <p><strong>Wer ist verantwortlich für die Datenerfassung auf dieser Website?</strong></p>
  <p>Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten können Sie dem Impressum dieser Website entnehmen.</p>
  <p><strong>Wie erfassen wir Ihre Daten?</strong></p>
  <p>Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich z.B. um Daten handeln, die Sie in ein Kontaktformular eingeben.</p>
  <p>Andere Daten werden automatisch beim Besuch der Website durch unsere IT-Systeme erfasst. Das sind vor allem technische Daten (z.B. Internetbrowser, Betriebssystem oder Uhrzeit des Seitenaufrufs). Die Erfassung dieser Daten erfolgt automatisch, sobald Sie unsere Website betreten.</p>
  <p><strong>Wofür nutzen wir Ihre Daten?</strong></p>
  <p>Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu gewährleisten. Andere Daten können zur Analyse Ihres Nutzerverhaltens verwendet werden.</p>
  <p><strong>Welche Rechte haben Sie bezüglich Ihrer Daten?</strong></p>
  <p>Sie haben jederzeit das Recht unentgeltlich Auskunft über Herkunft, Empfänger und Zweck Ihrer gespeicherten personenbezogenen Daten zu erhalten. Sie haben außerdem ein Recht, die Berichtigung, Sperrung oder Löschung dieser Daten zu verlangen. Hierzu sowie zu weiteren Fragen zum Thema Datenschutz können Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden. Des Weiteren steht Ihnen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu.</p>
  <h4 style="color:black">Analyse-Tools und Tools von Drittanbietern</h4>
  <p>Beim Besuch unserer Website kann Ihr Surf-Verhalten statistisch ausgewertet werden. Das geschieht vor allem mit Cookies und mit sogenannten Analyseprogrammen. Die Analyse Ihres Surf-Verhaltens erfolgt in der Regel anonym; das Surf-Verhalten kann nicht zu Ihnen zurückverfolgt werden. Sie können dieser Analyse widersprechen oder sie durch die Nichtbenutzung bestimmter Tools verhindern. Detaillierte Informationen dazu finden Sie in der folgenden Datenschutzerklärung.</p>
  <p>Sie können dieser Analyse widersprechen. Über die Widerspruchsmöglichkeiten werden wir Sie in dieser Datenschutzerklärung informieren.</p></div>
	  
  </div>
    
	  </div>
	  
	  <!--<div style="overflow: auto;">-->
	  <div>
	<br><br>
			  <h5 id="a01">2. Allgemeine Hinweise und Pflichtinformationen</h5>
  
  <div>
  	  
			  <div><h4 style="color:black">Datenschutz</h4>
  <p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.</p>
  <p>Wenn Sie diese Website benutzen, werden verschiedene personenbezogene Daten erhoben. Personenbezogene Daten sind Daten, mit denen Sie persönlich identifiziert werden können. Die vorliegende Datenschutzerklärung erläutert, welche Daten wir erheben und wofür wir sie nutzen. Sie erläutert auch, wie und zu welchem Zweck das geschieht.</p>
  <p>Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.</p>
  <h4 style="color:black">Hinweis zur verantwortlichen Stelle</h4>
  <p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>
  <p>FH Münster<br> Hüfferstraße 27<br>48149 Münster</p>
  <p>Telefon: 0251 83-0<br>E-Mail: <a onclick="SP.util.Email.decryptAttribute(this, 'href'); SP.util.Email.decryptAttribute(this, 'href');" data-sp-email="" href="mailto:datenschutz%E2%9A%B9fh-muenster%E2%97%A6de" class="SP-encrypted-email SP-encrypted-email" tabindex="93">datenschutz@fh-muenster.de</a></p>
  <p>Verantwortliche Stelle ist die natürliche oder juristische Person, die allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten (z.B. Namen, E-Mail-Adressen o. Ä.) entscheidet.</p>
  <h4 style="color:black">Widerruf Ihrer Einwilligung zur Datenverarbeitung</h4>
  <p>Viele Datenverarbeitungsvorgänge sind nur mit Ihrer ausdrücklichen Einwilligung möglich. Sie können eine bereits erteilte Einwilligung jederzeit widerrufen. Dazu reicht eine formlose Mitteilung per E-Mail an uns. Die Rechtmäßigkeit der bis zum Widerruf erfolgten Datenverarbeitung bleibt vom Widerruf unberührt.</p>
  <h4 style="color:black">Beschwerderecht bei der zuständigen Aufsichtsbehörde</h4>
  <p>Im Falle datenschutzrechtlicher Verstöße steht dem Betroffenen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu. Zuständige Aufsichtsbehörde in datenschutzrechtlichen Fragen ist der Landesdatenschutzbeauftragte des Bundeslandes, in dem unser Unternehmen seinen Sitz hat. Eine Liste der Datenschutzbeauftragten sowie deren Kontaktdaten können folgendem Link entnommen werden:</p></div>
	  
  </div>
  
			  <div>
				 					  
				<a href="https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html" onclick="window.open(this.href);return false;" title="Externer Link in einem neuen Fenster" tabindex="94"><strong>Der Bundesbeauftragte für den Datenschutz und die Informationsfreiheit (BFDI)</strong></a>
						  

			  </div>
		   
	  </div>
	  
	  <!--<div style="overflow: auto;">-->
	  <div>
	  
  <div>
  	  
			  <div><h4 style="color:black">SSL- bzw. TLS-Verschlüsselung</h4>
  <p>Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte, wie zum Beispiel Bestellungen oder Anfragen, die Sie an uns als Seitenbetreiber senden, eine SSL-bzw. TLS-Verschlüsselung. Eine verschlüsselte Verbindung erkennen Sie daran, dass die Adresszeile des Browsers von "http://" auf "https://" wechselt und an dem Schloss-Symbol in Ihrer Browserzeile.</p>
  <p>Wenn die SSL- bzw. TLS-Verschlüsselung aktiviert ist, können die Daten, die Sie an uns übermitteln, nicht von Dritten mitgelesen werden.</p>
  <h4 style="color:black">Auskunft, Sperrung, Löschung</h4>
  <p>Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf unentgeltliche Auskunft über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empfänger und den Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten. Hierzu sowie zu weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden.</p></div>
		
  </div>
    
	  </div>
	  
	  <!--<div style="overflow: auto;">-->
	  <div>
	  <br><br>
			  <h5 id="a03">3. Datenschutzbeauftragte</h5>
  
  <div>
    
			  <div><h4 style="color:black">Gesetzlich vorgeschriebene Datenschutzbeauftragte</h4>
  <p>Wir haben für unsere FH Münster Datenschutzbeauftragte bestellt.</p></div>
		</div>
    	</div>
	  
		</div>	


		<div style="clear:both;">

<div class="absatz">

     <!-- personenliste.tpl.php --><div class="person"><h4 style="color:black">Rechtliche Aspekte des Datenschutz</h4><div class="row"><div class="col-sm-9"><p></p><strong>Ass. jur. Laura Wefers</strong><p></p><p>Hüfferstraße 27, 48149 Münster, Raum:&nbsp;B 201</p><p>Tel: 0251 83-64004<br></p><p> </p><p><span class="SP-encrypted-email"><a onclick="SP.util.Email.decryptAttribute(this, 'href');" class="SP-encrypted-email" href="mailto:laura.wefers%E2%9A%B9fh-muenster%E2%97%A6de" rel="nofollow" tabindex="95">laura.wefers@fh-muenster.de</a></span></p></div></div></div>   

     <!-- personenliste.tpl.php --><div class="person"><h4 style="color:black">Technische Aspekte des Datenschutz</h4><div class="row"><div class="col-sm-9"><p></p><strong>Dipl.-Ing. Markus Gleis</strong><p></p><p>Johann-Krane-Weg 21, 48149 Münster, Raum:&nbsp;004</p><p>Tel: 0251 83-64907<br></p><p></p><p><span class="SP-encrypted-email"><a onclick="SP.util.Email.decryptAttribute(this, 'href');" class="SP-encrypted-email" href="mailto:gleis%E2%9A%B9fh-muenster%E2%97%A6de" rel="nofollow" tabindex="96">gleis@fh-muenster.de</a></span></p></div></div></div>   
	 <br><br><br>
</div>


      </div>

				</div>
			</div>
			<?php include 'footer.php'; ?>
			
		</div>
		
	</body>
</html>
