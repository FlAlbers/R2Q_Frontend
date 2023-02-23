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
					<!-- <h3  style = "width: 1000px; text-align: justify;"> Bildverweise  </h3> -->
				
					<h1 class="adsimple-312366223">Datenschutzerklärung</h1>
					<h2 id="einleitung-ueberblick" class="adsimple-312366223">Einleitung und Überblick</h2>
					<p>Wir haben diese Datenschutzerklärung (Fassung 20.12.2022-312366223) verfasst, um Ihnen gemäß der Vorgaben der <a class="adsimple-312366223" href="https://eur-lex.europa.eu/legal-content/DE/TXT/HTML/?uri=CELEX:32016R0679&amp;from=DE&amp;tid=312366223#d1e2269-1-1" target="_blank" rel="noopener">Datenschutz-Grundverordnung (EU) 2016/679</a> und anwendbaren nationalen Gesetzen zu erklären, welche personenbezogenen Daten (kurz Daten) wir als Verantwortliche &#8211; und die von uns beauftragten Auftragsverarbeiter (z. B. Provider) &#8211; verarbeiten, zukünftig verarbeiten werden und welche rechtmäßigen Möglichkeiten Sie haben. Die verwendeten Begriffe sind geschlechtsneutral zu verstehen.<br />
					<strong class="adsimple-312366223">Kurz gesagt:</strong> Wir informieren Sie umfassend über Daten, die wir über Sie verarbeiten.</p>
					<p>Datenschutzerklärungen klingen für gewöhnlich sehr technisch und verwenden juristische Fachbegriffe. Diese Datenschutzerklärung soll Ihnen hingegen die wichtigsten Dinge so einfach und transparent wie möglich beschreiben. Soweit es der Transparenz förderlich ist, werden technische <strong class="adsimple-312366223">Begriffe leserfreundlich erklärt</strong>, Links zu weiterführenden Informationen geboten und <strong class="adsimple-312366223">Grafiken</strong> zum Einsatz gebracht. Wir informieren damit in klarer und einfacher Sprache, dass wir im Rahmen unserer Geschäftstätigkeiten nur dann personenbezogene Daten verarbeiten, wenn eine entsprechende gesetzliche Grundlage gegeben ist. Das ist sicher nicht möglich, wenn man möglichst knappe, unklare und juristisch-technische Erklärungen abgibt, so wie sie im Internet oft Standard sind, wenn es um Datenschutz geht. Ich hoffe, Sie finden die folgenden Erläuterungen interessant und informativ und vielleicht ist die eine oder andere Information dabei, die Sie noch nicht kannten.<br />
					Wenn trotzdem Fragen bleiben, möchten wir Sie bitten, sich an die unten bzw. im Impressum genannte verantwortliche Stelle zu wenden, den vorhandenen Links zu folgen und sich weitere Informationen auf Drittseiten anzusehen. Unsere Kontaktdaten finden Sie selbstverständlich auch im Impressum.</p>
					<h2 id="anwendungsbereich" class="adsimple-312366223">Anwendungsbereich</h2>
					<p>Diese Datenschutzerklärung gilt für alle von uns im Unternehmen verarbeiteten personenbezogenen Daten und für alle personenbezogenen Daten, die von uns beauftragte Firmen (Auftragsverarbeiter) verarbeiten. Mit personenbezogenen Daten meinen wir Informationen im Sinne des Art. 4 Nr. 1 DSGVO wie zum Beispiel Name, E-Mail-Adresse und postalische Anschrift einer Person. Die Verarbeitung personenbezogener Daten sorgt dafür, dass wir unsere Dienstleistungen und Produkte anbieten und abrechnen können, sei es online oder offline. Der Anwendungsbereich dieser Datenschutzerklärung umfasst:</p>
					<ul class="adsimple-312366223">
					<li class="adsimple-312366223">alle Onlineauftritte (Websites, Onlineshops), die wir betreiben</li>
					<li class="adsimple-312366223">Social Media Auftritte und E-Mail-Kommunikation</li>
					<li class="adsimple-312366223">mobile Apps für Smartphones und andere Geräte</li>
					</ul>
					<p>
					<strong class="adsimple-312366223">Kurz gesagt:</strong> Die Datenschutzerklärung gilt für alle Bereiche, in denen personenbezogene Daten im Unternehmen über die genannten Kanäle strukturiert verarbeitet werden. Sollten wir außerhalb dieser Kanäle mit Ihnen in Rechtsbeziehungen eintreten, werden wir Sie gegebenenfalls gesondert informieren.</p>
					<h2 id="rechtsgrundlagen" class="adsimple-312366223">Rechtsgrundlagen</h2>
					<p>In der folgenden Datenschutzerklärung geben wir Ihnen transparente Informationen zu den rechtlichen Grundsätzen und Vorschriften, also den Rechtsgrundlagen der Datenschutz-Grundverordnung, die uns ermöglichen, personenbezogene Daten zu verarbeiten.<br />
					Was das EU-Recht betrifft, beziehen wir uns auf die VERORDNUNG (EU) 2016/679 DES EUROPÄISCHEN PARLAMENTS UND DES RATES vom 27. April 2016. Diese Datenschutz-Grundverordnung der EU können Sie selbstverständlich online auf EUR-Lex, dem Zugang zum EU-Recht, unter <a class="adsimple-312366223" href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32016R0679">https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32016R0679</a> nachlesen.</p>
					<p>Wir verarbeiten Ihre Daten nur, wenn mindestens eine der folgenden Bedingungen zutrifft:</p>
					<ol>
					<li class="adsimple-312366223">
					<strong class="adsimple-312366223">Einwilligung</strong> (Artikel 6 Absatz 1 lit. a DSGVO): Sie haben uns Ihre Einwilligung gegeben, Daten zu einem bestimmten Zweck zu verarbeiten. Ein Beispiel wäre die Speicherung Ihrer eingegebenen Daten eines Kontaktformulars.</li>
					<li class="adsimple-312366223">
					<strong class="adsimple-312366223">Vertrag</strong> (Artikel 6 Absatz 1 lit. b DSGVO): Um einen Vertrag oder vorvertragliche Verpflichtungen mit Ihnen zu erfüllen, verarbeiten wir Ihre Daten. Wenn wir zum Beispiel einen Kaufvertrag mit Ihnen abschließen, benötigen wir vorab personenbezogene Informationen.</li>
					<li class="adsimple-312366223">
					<strong class="adsimple-312366223">Rechtliche Verpflichtung</strong> (Artikel 6 Absatz 1 lit. c DSGVO): Wenn wir einer rechtlichen Verpflichtung unterliegen, verarbeiten wir Ihre Daten. Zum Beispiel sind wir gesetzlich verpflichtet Rechnungen für die Buchhaltung aufzuheben. Diese enthalten in der Regel personenbezogene Daten.</li>
					<li class="adsimple-312366223">
					<strong class="adsimple-312366223">Berechtigte Interessen</strong> (Artikel 6 Absatz 1 lit. f DSGVO): Im Falle berechtigter Interessen, die Ihre Grundrechte nicht einschränken, behalten wir uns die Verarbeitung personenbezogener Daten vor. Wir müssen zum Beispiel gewisse Daten verarbeiten, um unsere Website sicher und wirtschaftlich effizient betreiben zu können. Diese Verarbeitung ist somit ein berechtigtes Interesse.</li>
					</ol>
					<p>Weitere Bedingungen wie die Wahrnehmung von Aufnahmen im öffentlichen Interesse und Ausübung öffentlicher Gewalt sowie dem Schutz lebenswichtiger Interessen treten bei uns in der Regel nicht auf. Soweit eine solche Rechtsgrundlage doch einschlägig sein sollte, wird diese an der entsprechenden Stelle ausgewiesen.</p>
					<p>Zusätzlich zu der EU-Verordnung gelten auch noch nationale Gesetze:</p>
					<ul class="adsimple-312366223">
					<li class="adsimple-312366223">In <strong class="adsimple-312366223">Österreich</strong> ist dies das Bundesgesetz zum Schutz natürlicher Personen bei der Verarbeitung personenbezogener Daten (<strong class="adsimple-312366223">Datenschutzgesetz</strong>), kurz <strong class="adsimple-312366223">DSG</strong>.</li>
					<li class="adsimple-312366223">In <strong class="adsimple-312366223">Deutschland</strong> gilt das <strong class="adsimple-312366223">Bundesdatenschutzgesetz</strong>, kurz<strong class="adsimple-312366223"> BDSG</strong>.</li>
					</ul>
					<p>Sofern weitere regionale oder nationale Gesetze zur Anwendung kommen, informieren wir Sie in den folgenden Abschnitten darüber.</p>
					<h2 id="kontaktdaten-verantwortliche" class="adsimple-312366223">Kontaktdaten des Verantwortlichen</h2>
					<p>Sollten Sie Fragen zum Datenschutz oder zur Verarbeitung personenbezogener Daten haben, finden Sie nachfolgend die Kontaktdaten der verantwortlichen Person bzw. Stelle:<br />
					<span class="adsimple-312366223" style="font-weight: 400">Musterfirma GbR<br />
					Max Mustermann<br />
					Musterstraße 47, 12312 Musterstadt, Deutschland</span>
					<br />
					<span style="font-weight: 400">Vertretungsberechtigt: Markus Mustermann</span>
					<br />
					E-Mail: <a href="mailto:mail@musterfirma.de">mail@musterfirma.de</a>
					<br />
					Telefon: <a href="tel:+49 4711 12345">+49 4711 12345</a>
					<br />
					Impressum: <a href="https://www.testfirma.de/impressum/">https://www.testfirma.de/impressum/</a>
					</p>
					<h2 id="speicherdauer" class="adsimple-312366223">Speicherdauer</h2>
					<p>Dass wir personenbezogene Daten nur so lange speichern, wie es für die Bereitstellung unserer Dienstleistungen und Produkte unbedingt notwendig ist, gilt als generelles Kriterium bei uns. Das bedeutet, dass wir personenbezogene Daten löschen, sobald der Grund für die Datenverarbeitung nicht mehr vorhanden ist. In einigen Fällen sind wir gesetzlich dazu verpflichtet, bestimmte Daten auch nach Wegfall des ursprüngliches Zwecks zu speichern, zum Beispiel zu Zwecken der Buchführung.</p>
					<p>Sollten Sie die Löschung Ihrer Daten wünschen oder die Einwilligung zur Datenverarbeitung widerrufen, werden die Daten so rasch wie möglich und soweit keine Pflicht zur Speicherung besteht, gelöscht.</p>
					<p>Über die konkrete Dauer der jeweiligen Datenverarbeitung informieren wir Sie weiter unten, sofern wir weitere Informationen dazu haben.</p>
					<h2 id="rechte-dsgvo" class="adsimple-312366223">Rechte laut Datenschutz-Grundverordnung</h2>
					<p>Gemäß Artikel 13, 14 DSGVO informieren wir Sie über die folgenden Rechte, die Ihnen zustehen, damit es zu einer fairen und transparenten Verarbeitung von Daten kommt:</p>
					<ul class="adsimple-312366223">
					<li class="adsimple-312366223">Sie haben laut Artikel 15 DSGVO ein Auskunftsrecht darüber, ob wir Daten von Ihnen verarbeiten. Sollte das zutreffen, haben Sie Recht darauf eine Kopie der Daten zu erhalten und die folgenden Informationen zu erfahren:
					<ul class="adsimple-312366223">
					<li class="adsimple-312366223">zu welchem Zweck wir die Verarbeitung durchführen;</li>
					<li class="adsimple-312366223">die Kategorien, also die Arten von Daten, die verarbeitet werden;</li>
					<li class="adsimple-312366223">wer diese Daten erhält und wenn die Daten an Drittländer übermittelt werden, wie die Sicherheit garantiert werden kann;</li>
					<li class="adsimple-312366223">wie lange die Daten gespeichert werden;</li>
					<li class="adsimple-312366223">das Bestehen des Rechts auf Berichtigung, Löschung oder Einschränkung der Verarbeitung und dem Widerspruchsrecht gegen die Verarbeitung;</li>
					<li class="adsimple-312366223">dass Sie sich bei einer Aufsichtsbehörde beschweren können (Links zu diesen Behörden finden Sie weiter unten);</li>
					<li class="adsimple-312366223">die Herkunft der Daten, wenn wir sie nicht bei Ihnen erhoben haben;</li>
					<li class="adsimple-312366223">ob Profiling durchgeführt wird, ob also Daten automatisch ausgewertet werden, um zu einem persönlichen Profil von Ihnen zu gelangen.</li>
					</ul>
					</li>
					<li class="adsimple-312366223">Sie haben laut Artikel 16 DSGVO ein Recht auf Berichtigung der Daten, was bedeutet, dass wir Daten richtig stellen müssen, falls Sie Fehler finden.</li>
					<li class="adsimple-312366223">Sie haben laut Artikel 17 DSGVO das Recht auf Löschung („Recht auf Vergessenwerden“), was konkret bedeutet, dass Sie die Löschung Ihrer Daten verlangen dürfen.</li>
					<li class="adsimple-312366223">Sie haben laut Artikel 18 DSGVO das Recht auf Einschränkung der Verarbeitung, was bedeutet, dass wir die Daten nur mehr speichern dürfen aber nicht weiter verwenden.</li>
					<li class="adsimple-312366223">Sie haben laut Artikel 20 DSGVO das Recht auf Datenübertragbarkeit, was bedeutet, dass wir Ihnen auf Anfrage Ihre Daten in einem gängigen Format zur Verfügung stellen.</li>
					<li class="adsimple-312366223">Sie haben laut Artikel 21 DSGVO ein Widerspruchsrecht, welches nach Durchsetzung eine Änderung der Verarbeitung mit sich bringt.
					<ul class="adsimple-312366223">
					<li class="adsimple-312366223">Wenn die Verarbeitung Ihrer Daten auf Artikel 6 Abs. 1 lit. e (öffentliches Interesse, Ausübung öffentlicher Gewalt) oder Artikel 6 Abs. 1 lit. f (berechtigtes Interesse) basiert, können Sie gegen die Verarbeitung Widerspruch einlegen. Wir prüfen danach so rasch wie möglich, ob wir diesem Widerspruch rechtlich nachkommen können.</li>
					<li class="adsimple-312366223">Werden Daten verwendet, um Direktwerbung zu betreiben, können Sie jederzeit gegen diese Art der Datenverarbeitung widersprechen. Wir dürfen Ihre Daten danach nicht mehr für Direktmarketing verwenden.</li>
					<li class="adsimple-312366223">Werden Daten verwendet, um Profiling zu betreiben, können Sie jederzeit gegen diese Art der Datenverarbeitung widersprechen. Wir dürfen Ihre Daten danach nicht mehr für Profiling verwenden.</li>
					</ul>
					</li>
					<li class="adsimple-312366223">Sie haben laut Artikel 22 DSGVO unter Umständen das Recht, nicht einer ausschließlich auf einer automatisierten Verarbeitung (zum Beispiel Profiling) beruhenden Entscheidung unterworfen zu werden.</li>
					<li class="adsimple-312366223">Sie haben laut Artikel 77 DSGVO das Recht auf Beschwerde. Das heißt, Sie können sich jederzeit bei der Datenschutzbehörde beschweren, wenn Sie der Meinung sind, dass die Datenverarbeitung von personenbezogenen Daten gegen die DSGVO verstößt.</li>
					</ul>
					<p>
					<strong class="adsimple-312366223">Kurz gesagt:</strong> Sie haben Rechte &#8211; zögern Sie nicht, die oben gelistete verantwortliche Stelle bei uns zu kontaktieren!</p>
					<p>Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt oder Ihre datenschutzrechtlichen Ansprüche in sonst einer Weise verletzt worden sind, können Sie sich bei der Aufsichtsbehörde beschweren. Diese ist für Österreich die Datenschutzbehörde, deren Website Sie unter <a class="adsimple-312366223" href="https://www.dsb.gv.at/?tid=312366223" target="_blank" rel="noopener">https://www.dsb.gv.at/</a> finden. In Deutschland gibt es für jedes Bundesland einen Datenschutzbeauftragten. Für nähere Informationen können Sie sich an die <a class="adsimple-312366223" href="https://www.bfdi.bund.de/DE/Home/home_node.html" target="_blank" rel="noopener">Bundesbeauftragte für den Datenschutz und die Informationsfreiheit (BfDI)</a> wenden. Für unser Unternehmen ist die folgende lokale Datenschutzbehörde zuständig:</p>
					<h2 id="nordrhein-westfalen-datenschutzbehoerde" class="adsimple-312366223">Nordrhein-Westfalen Datenschutzbehörde</h2>
					<p>
					<strong class="adsimple-312366223">Landesbeauftragte für Datenschutz:</strong> Bettina Gayk<br />
					<strong class="adsimple-312366223">Adresse: </strong>Kavalleriestraße 2-4, 40213 Düsseldorf<br />
					<strong class="adsimple-312366223">Telefonnr.:</strong> 02 11/384 24-0<br />
					<strong class="adsimple-312366223">E-Mail-Adresse:</strong> poststelle@ldi.nrw.de<br />
					<strong class="adsimple-312366223">Website: </strong>
					<a class="adsimple-312366223" href="https://www.ldi.nrw.de/?tid=312366223" target="_blank" rel="noopener">https://www.ldi.nrw.de/</a>
					</p>
					<p>Alle Texte sind urheberrechtlich geschützt.</p>
					<p style="margin-top:15px">Quelle: Erstellt mit dem <a href="https://www.adsimple.de/datenschutz-generator/" title="Datenschutz Generator von AdSimple für Deutschland">Datenschutz Generator</a> von AdSimple</p>

				</div>
			</div>
			<?php include 'footer.php'; ?>
			
		</div>
		
	</body>
</html>
