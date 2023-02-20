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
			
			<div class="mainContent">
				
				<div class = "refLibContent">
					<h3  style = "width: 1000px; text-align: justify;"> Literaturverweise </h3>

					<p style="margin-top: -15px;">
					2G Energy AG (2020): „Avus 500 plus“. Abgerufen von https://2-g.com/de/produkte/avus.
<br><br>
Ackermann, K. (2010): „Brauchwasser (Grauwasser) - Recycling mit ingenieurökologischen und technischen Verfahren in Europa und Entwicklungsländern“. (Projektarbeit) Wiesbaden: Hochschule RheinMain.
<br><br>
AEE (2020): „Must-run-Kapazität“. Abgerufen 21.04.2020 von https://www.unendlich-viel-energie.de/glossar?letter=M.
<br><br>
AEG (2020): „Wärmespeicher“. Abgerufen 20.04.2020 von https://www.aeg-haustechnik.de/de/home/produkte-loesungen/raumheizgeraete/waermespeicher.html.
<br><br>
Agora Energiewende (2014): „Power-to-Heat“. Abgerufen 03.09.2020 von https://www.agora-energiewende.de/fileadmin2/Projekte/2013/power-to-heat/Agora_PtH_Langfassung_WEB.pdf.
<br><br>
Aichele, C., Doleski, O.D. (Hrsg.) (2014): Smart Market. Wiesbaden: Springer Fachmedien Wiesbaden doi: 10.1007/978-3-658-02778-0.
<br><br>
Alp, Ö. (2010): „Further treatment of digested blackwater for extraction of valuable components“. (Dissertation) Hamburg: Gesellschaft zur Förderung und Entwicklung der Umwelttechnologien an der Technischen Universität Hamburg-Harburg.
<br><br>
Annemarie Bäthge, Anna Probst (2018): „Windkraftenergie in der Stadt. Perspektiven für den urbanen Raum“. TU Berlin. Abgerufen 08.05.2020 von https://www.klima.tu-berlin.de/insulaner/sites/default/files/2018-08/A1_Bäthge_Probst_11_08_2230.pdf.
<br><br>
Arnim, A. von, Arnim, J. von, Doleski, O.D. (2020): Realisierung Utility 4.0 Band 1. Wiesbaden: Springer Vieweg.
<br><br>
ARTIGO GmbH (2021): „Trockenurinale Kosten und Ökobilanz“. Abgerufen 22.03.2021 von https://www.culu.eu/lebenszykluskosten-und-oekobilanz-bei-trockenurinalen.
<br><br>
ASUE (2015): „Blockheizkraftwerke“. Abgerufen 09.04.2020 von https://asue.de/sites/default/files/asue/themen/blockheizkraftwerke/2015/broschueren/asue_050315_bhkw_fibel.pdf.
<br><br>
ASUE (2018): „Leitfaden Klein-BHKW“. Abgerufen von https://www.asue.de/sites/default/files/asue/themen/brennstoffzellen/2018/broschueren/ASUE_Leitfaden-Klein-BHKW_2018-02_309887.pdf.
<br><br>
avacon (2020): „Mieterstrom“. Abgerufen 17.06.2020 von https://www.avacon.de/de/fuer-unternehmen/waerme-und-kaelteloesungen/mieterstrom.html.
<br><br>

Aydemir, A. (2015): Energietechnologien der Zukunft. Springer Vieweg.
<br><br>
Badenova (2013): „badenova.de“. Abgerufen 29.04.2020 von badenova.de.
<br><br>
bafa (2019): „Heizen mit Erneuerbaren Energien“. Abgerufen 27.04.2020 von https://www.bafa.de/DE/Energie/Heizen_mit_Erneuerbaren_Energien/Programm_bis_2019/programm_bis_2019_node.html#doc13402384bodyText28.
<br><br>
Bauer, M.J., Freeden, W., Jacobi, H., Neu, T. (Hrsg.) (2018): Handbuch oberflächennahe Geothermie. Berlin: Springer Spektrum.
<br><br>
Baumann, M., Peters, J.F., Weil, M., Grunwald, A. (2017): „CO 2 Footprint and Life-Cycle Costs of Electrochemical Energy Storage for Stationary Grid Applications“. In: Energy Technology. 5 (7), S. 1071–1083, doi: 10.1002/ente.201600622.
<br><br>
Bayerische Landesanstalt für Landeswirtschaft (2020): „Versuchs- und Bildungszentrum für Rinderfütterung“. Abgerufen 17.04.2020 von https://www.lfl.bayern.de/lvfz/achselschwang/055391/index.php.
<br><br>
BDEW (2017a): „Blockchain in der Energiewirtschaft“. Berlin: BDEW Bundesverband der Energie- und Wasserwirtschaft e.V. and BDEW.
<br><br>
BDEW (2017b): „Smart Grids“. Abgerufen 16.03.2020 von https://www.bdew.de/energie/smart-grids/.
<br><br>
BDEW (2020): „Strompreisanalyse“. Abgerufen 18.06.2020 von https://www.bdew.de/media/documents/20200107_BDEW-Strompreisanalyse_Januar_2020.pdf.
<br><br>
BDEW (2019): Trinkwasserverwendung im Haushalt. Bundesverband der Energie- und Wasserwirtschaft e.V. (BDEW).
<br><br>
BDEW (2017c): „Zukunft Wärmenetzsysteme“. Abgerufen 01.03.2020 von https://www.bdew.de/media/documents/Stn_20170615_Strategiepapier-Zukunft-Waermenetzsysteme.pdf.
<br><br>
Behr, I., Großklos, M. (2017): Praxishandbuch Mieterstrom. Wiesbaden: Springer Fachmedien Wiesbaden doi: 10.1007/978-3-658-17540-5.
<br><br>
Benden, J., Broesi, R., Illgen, M., Leinweber, U., Lennartz, G., Scheid, C., Schmitt, T.G. (2017): Multifunktionale Retentionsflächen. Teil 3: Arbeitshilfe für Planung, Umsetzung und Betrieb. MURIEL. (Arbeitshilfe).
<br><br>
Berliner Wasserbetriebe (2021): „Heizen und Kühlen mit Abwasser“. Abgerufen 22.03.2021 von https://www.bwb.de/de/14317.php.
<br><br>
BHKW-Forum e.V. (2020): „BHKW-Informationen“. Abgerufen 09.10.2021 von https://www.bhkw-forum.info/bhkw-informationen/.
<br><br>
Blackhurst, M., Hendrickson, C., Matthews, H.S. (2010): „Cost-effectiveness of green roofs“. In: Journal of Architectural Engineering. American Society of Civil Engineers 16 (4), S. 136–143.
<br><br>
Blanken, M., Verweij, C., Mulder, K. (2019): „Why Novel Sanitary Systems are Hardly Introduced?“. In: Journal of Sustainable Development of Energy, Water and Environment Systems. 7 (1), S. 13–27, doi: 10.13044/j.sdewes.d6.0214.
<br><br>
BlueGreenStreets (2022a): BlueGreenStreets Toolbox – Teil A. Multifunktionale Straßenraumgestaltung urbaner Quartiere, März 2022, Hamburg. Erstellt im Rahmen der BMBF-Fördermaßnahme „Ressourceneffiziente Stadtquartiere für die Zukunft“ (RES:Z). Hamburg: BlueGreenStreets.
<br><br>
BlueGreenStreets (2022b): BlueGreenStreets Toolbox – Teil B. Multifunktionale Straßenraumgestaltung urbaner Quartiere, März 2022, Hamburg. Erstellt im Rahmen der BMBF-Fördermaßnahme „Ressourceneffiziente Stadtquartiere für die Zukunft“ (RES:Z). Hamburg: BlueGreenStreets.
<br><br>
BMVBS (2009): Bewertungssystem Nachhaltiges Bauen (BNB) - Neubau Büro- und Verwaltungsgebäude. Berlin: Bundesministerium für Verkehr, Bau und Stadtentwicklung (BMVBS).
<br><br>
BMVIT (2017): Technologiebeschreibungen Energie und Nährstoffe aus Abwasser, Anhang für den Leitfaden. Bundesministeriums für Verkehr, Innovation und Technologie (BMVIT).
<br><br>
BMWI (2019a): „Blockchain-Strategie“. Abgerufen 17.03.2020 von https://www.bmwk.de/Redaktion/DE/Publikationen/Digitale-Welt/blockchain-strategie.pdf?__blob=publicationFile&v=8.
<br><br>
BMWI (2020a): „Bringen Sie Ihr Haus in Bestform“. Abgerufen 08.10.2021 von https://www.deutschland-machts-effizient.de/KAENEF/Redaktion/DE/Publikation/bringen-sie-ihr-haus-in-bestform.html.
<br><br>
BMWI (2019b): „Bundesbericht Energieforschung 2019“. Abgerufen 31.03.2020 von https://www.bmwi.de/Redaktion/DE/Publikationen/Energie/bundesbericht-energieforschung-2019.pdf?__blob=publicationFile&v=15.
<br><br>
BMWI (2015): „Energieeffizienzstrategie Gebäude - Wege zu einem nahezu klimaneutralen Gebäudezustand“. Abgerufen 24.07.2020 von https://www.bmwi.de/Redaktion/DE/Publikationen/Energie/energieeffizienzstrategie-gebaeude.pdf?__blob=publicationFile&v=25.
<br><br>
BMWI (2020b): „Mieterstrom“. Abgerufen 10.03.2020 von https://www.bmwi.de/Redaktion/DE/Artikel/Energie/mieterstrom.html.
<br><br>
BMWI (2020c): „Smart Meter“. Abgerufen 17.04.2020 von https://www.bmwi.de/Redaktion/DE/Textsammlungen/Energie/smart-meter.html.
<br><br>
Boehler, M.A., Heisele, A., Seyfried, A., Grömping, M., Siegrist, H. (2015): „(NH4)2SO4 recovery from liquid side streams“. In: Environmental Science and Pollution Research. 22 (10), S. 7295–7305, doi: 10.1007/s11356-014-3392-8.
<br><br>
Böttcher, J. (2014): Wasserkraftprojekte. Berlin, Heidelberg: Springer Berlin Heidelberg doi: 10.1007/978-3-642-40112-1.
<br><br>
Breitkopf, A. (2021): „Photovoltaik - Größte Hersteller weltweit nach Marktanteil 2017“. Abgerufen 08.10.2021 von https://de.statista.com/statistik/daten/studie/164196/umfrage/marktanteile-an-der-weltweiten-photovoltaikproduktion-im-jahr-2009/.
<br><br>
Brunk, M.F., Seybold, C. (2012): „Potential der dezentralen Abwasserwärmerückgewinnung“. In: BHKS-Almanach. S. 44–48.
<br><br>
Brunk, M.F., Seybold, C., Osebold, R., Beyert, J., Vosen, G. (2013): Dezentrale Wärmerückgewinnung aus häuslichem Abwasser: Abschlussbericht. Stuttgart: Fraunhofer IRB Verlag (Bauforschung für die Praxis).
<br><br>
Bundesnetzagentur (2019): „Hinweis EE-Stromspeicher: Registrierungspflichten, Amnestie, Förderung und Abgrenzung Version 1.1“. Abgerufen 06.01.2020 von https://www.bundesnetzagentur.de/SharedDocs/Downloads/DE/Sachgebiete/Energie/Unternehmen_Institutionen/ErneuerbareEnergien/Hinweispapiere/Stromspeicher.pdf?__blob=publicationFile&v=3.
<br><br>
Bundesnetzagentur (2020a): „Hinweis zum Mieterstromzuschlag als eine Sonderform der EEG-Förderung“. Abgerufen 12.06.2020 von https://www.bundesnetzagentur.de/SharedDocs/Downloads/DE/Sachgebiete/Energie/Unternehmen_Institutionen/ErneuerbareEnergien/Mieterstrom/Hinweis_Mieterstrom.pdf;jsessionid=15D56E3AD7DE919C1157981458EDB85C?__blob=publicationFile&v=5.
<br><br>
Bundesnetzagentur (2020b): „Mieterstrom“. Abgerufen 12.06.2020 von https://www.bundesnetzagentur.de/DE/Sachgebiete/ElektrizitaetundGas/Verbraucher/Vertragsarten/Mieterstrom/Mieterstrom_node.html.
<br><br>
Bundesnetzagentur (2011): „Smart Grid und Smart Market - Eckpunktepapier der Bundesnetzagentur“. Bonn Abgerufen von https://www.bundesnetzagentur.de/DE/Sachgebiete/ElektrizitaetundGas/Unternehmen_Institutionen/NetzentwicklungSmartGrid/SmartGrid_SmartMarket/start.html.
<br><br>
Bundesverband Geothermie (2019): „Geothermie in Zahlen“. Abgerufen 14.04.2020 von https://www.geothermie.de/geothermie/geothermie-in-zahlen.html.
<br><br>
Bundesverband KWK (2016): „Kraft-Wärme-Kopplung in der Wohnungswirtschaft: Technik, Wirtschaftlichkeit, Recht“. Abgerufen 09.04.2020 von https://www.bkwk.de/wp-content/uploads/2018/04/Broschuere_Wohnungswirtschaft_final-kl.pdf.
<br><br>
Bundesverband Wärmepumpe (2020): „Funktion Wärmequellen“. Abgerufen 02.03.2020 von https://www.waermepumpe.de/waermepumpe/funktion-waermequellen/.
<br><br>
Bundesverband Wärmepumpe (2018a): „Leitfaden Erdwärme“. Abgerufen 11.11.2019 von https://www.waermepumpe.de/uploads/tx_bcpageflip/Leitfaden_Erdwaerme_2018_Web.pdf.
<br><br>
Bundesverband Wärmepumpe (2016): „Siedlung erprobt Lastmanagement mit Wärmepumpen“. Abgerufen 07.01.2022 von https://www.waermepumpe.de/presse/pressefahrten/allgaeu-2016/details/im-praxistest-siedlung-erprobt-lastmanagement-mit-waermepumpen/.
<br><br>
Bundesverband Wärmepumpe (2018b): „Siedlungsprojekte und Quartierslösungen mit Wärmepumpen“. Abgerufen 13.10.2021 von https://www.waermepumpe.de/uploads/tx_bcpageflip/Broschuere_Siedlungen_Novelle_2018_web.pdf.
<br><br>
Bundesverband WindEnergie (2015): „A bis Z - Fakten zur Windenergie“. Abgerufen 29.01.2020 von https://www.wind-energie.de/fileadmin/redaktion/dokumente/publikationen-oeffentlich/themen/01-mensch-und-umwelt/01-windkraft-vor-ort/bwe_abisz_3-2015_72dpi_final.pdf.
<br><br>
Burger, C., Kuhlmann, A., Richard, P., Weinmann, J. (2016): „Blockchain in der Energiewende - Eine Umfrage unter Führungskräften der deutschen Energiewirtschaft“. dena.de. Abgerufen 16.03.2020 von https://www.dena.de/fileadmin/dena/Dokumente/Pdf/9165_Blockchain_in_der_Energiewende_deutsch.pdf.
<br><br>
Buri, R., Kobel, B. (2004): Leitfaden Wärmenutzung aus Abwasser. (Broschüre) Zürich: Energie in Infrastrukturanlagen.
<br><br>
BWP (2017): Praxisratgeber Modernisieren mit Wärmepumpe. Berlin: Bundesverband Wärmepumpe (BWP).
<br><br>
BWP (2019a): Ratgeber Energie aus Abwasser. Berlin: Bundesverband Wärmepumpe (BWP).
<br><br>
BWP (2019b): Ratgeber Energie aus Abwasser - Heizen und Kühlen mit der Energie aus dem Untergrund - Grundlagenwissen und Praxistipps. Berlin: Bundesverband Wärmepumpe (BWP).
<br><br>
Campisano, A., Gullotta, A., Modica, C. (2019): „Preliminary results of experiments for the evaluation of on-site detention of modular blue roofs“. In: Novatech Lyon 2019 - Urban Water - Planning technologies for sustainable management. Lyon.
<br><br>
C.A.R.M.E.N e. V. (2020a): „Festbrennstoffe“. Abgerufen 16.04.2020 von https://www.carmen-ev.de/biogene-festbrennstoffe/waermenetze.
<br><br>
C.A.R.M.E.N e. V. (2015): „Kleinwindkraftanlagen“. Abgerufen 29.01.2020 von https://www.carmen-ev.de/files/informationen/Brosch%C3%BCren/Kleinwindkraftanlagen.pdf.
<br><br>
C.A.R.M.E.N e. V. (2020b): „Wärmegestehungskosten Biomasseheizwerk“. Abgerufen 16.04.2020 von https://www.carmen-ev.de/biogene-festbrennstoffe/biomasseheizwerke/wirtschaftlichkeit/474-waermegestehungskosten.
<br><br>
C.A.R.M.E.N. e.V. (2019): „Kalte Wärmenetze“. Abgerufen 12.12.2019 von https://www.carmen-ev.de/biogene-festbrennstoffe/waermenetze/2033-kalte-waermenetze.
<br><br>
Civic Energy (2020): „civic-energy.eu“. Abgerufen 17.04.2020 von https://www.civic-energy.eu/.
<br><br>
Clausen, J. (2012): „Ländliche Wärmenetze“. Abgerufen 17.04.2020 von https://www.borderstep.de/wp-content/uploads/2014/07/Clausen-Kosten_-laendliche_-Waermenetze-2012.pdf.
<br><br>
cleanthinking (2020): „Eisspeicher“. Abgerufen 11.06.2020 von https://www.cleanthinking.de/eisspeicher-sorgt-fuer-kaelte-und-waerme-im-quartier/.
<br><br>
Clemes, J., Nisipeanu, P., Muskolus, A., Rieß, P., Arnold, U., Vinnerås, B., Winker, M. (2008): „Produkte aus neuartigen Sanitärsystemen in der Landwirtschaft“. In: Korrespondenz Abwasser, Abfall (KA). 55 (10), S. 1120–1125, doi: 10.3242/kae2008.10.007.
<br><br>
Cordell, D., White, S. (2011): „Peak Phosphorus: Clarifying the Key Issues of a Vigorous Debate about Long-Term Phosphorus Security“. In: Sustainability. 3 (10), S. 2027–2049, doi: 10.3390/su3102027.
<br><br>
Cornel, P., Schaum, C. (2009): „Phosphorus recovery from wastewater: needs, technologies and costs“. In: Water Science and Technology. 59 (6), S. 1069–1076, doi: 10.2166/wst.2009.045.
<br><br>
Crome, K. (2020): „Stadtwerke Münster heizen mit überschüssigem Windstrom“. Abgerufen 03.03.2020 von https://www.energieagentur.nrw/blogs/erneuerbare/beitraege/stadtwerke-muenster-heizen-mit-ueberschuessigem-windstrom/.
<br><br>
Cunha, J.R. (2018): „Anaerobic calcium phosphate bio granulation“. (Dissertation) Wageningen University doi: 10.18174/457977.
<br><br>
DBU, BWP, Infrastrukturanlagen, I.E. in (Hrsg.) (2009): Heizen und Kühlen mit Abwasser - Ratgeber für Bauträger und Kommunen. Deutsche Bundesstiftung Umwelt (DBU), Bundesverband Wärmepumpe e. V. (BWP), Institut Energie in Infrastrukturanlagen.
<br><br>
dena (2019): „Abschlussbericht dena-Projekt Urbane Energiewende“. Abgerufen von https://www.dena.de/fileadmin/dena/Publikationen/PDFs/2019/dena_UrbWEW_Abschlussbericht_Gesamtversion.pdf.
<br><br>
dena (2015a): „Der Königspark - ein CO2-neutrales Quartier entsteht“. Abgerufen von https://www.energiesprong.de/fileadmin/dena/Dokumente/Pdf/9135_Factsheet_Der_Koenigspark_Ein_CO2-neutrales_Quartier_entsteht.pdf.
<br><br>
dena (2015b): „Fachbroschüre Systemlösung Power to Gas“. Abgerufen 15.04.2020 von https://www.dena.de/fileadmin/dena/Dokumente/Pdf/9096_Fachbroschuere_Systemloesung_Power_to_Gas.pdf.
<br><br>
dena (2012): „Lastmanagement Handbuch“. Abgerufen 27.04.2020 von https://www.dena.de/fileadmin/dena/Dokumente/Pdf/1408_Lastmanagement_Handbuch.pdf.
<br><br>
dena (2018): „Schnittstellen und Standards für die Digitalisierung der Energiewende“. Abgerufen 20.04.2020 von https://www.dena.de/fileadmin/dena/Dokumente/Pdf/9240_Schnittstellen_und_Standards_fuer_die_Digitalisierung_der_Energiewende.pdf.
<br><br>
Desmidt, E., Ghyselbrecht, K., Zhang, Y., Pinoy, L., Van der Bruggen, B., Verstraete, W., Rabaey, K., Meesschaert, B. (2015): „Global Phosphorus Scarcity and Full-Scale P-Recovery Techniques: A Review“. In: Critical Reviews in Environmental Science and Technology. 45 (4), S. 336–384, doi: 10.1080/10643389.2013.866531.
<br><br>
detail (2018): „Wärmepumpen mit Inverter-Technologie“. Abgerufen 13.10.2021 von https://www.detail.de/artikel/waermepumpe-mit-inverter-technologie-und-erweitertem-gestaltungsspielraum-32073/.
<br><br>
Deutsche Bahn (2014): „Windräder auf dem Dach: Bahnhof Berlin Südkreuz wird intelligente Mobilitätsstation“. Abgerufen 07.05.2020 von https://archive.vn/20140502143730/http://www.deutschebahn.com/de/presse/presseinformationen/pi_k/6830244/h20140430.html.
<br><br>
Dichtl, N., Schmelz, K.-G. (2015): „Verfahrenstechniken zur Behandlung von Klärschlamm“. In: Anaerobtechnik: Abwasser-, Schlamm- und Reststoffbehandlung, Biogasgewinnung. 3., neu bearb. Aufl. Berlin: Springer Vieweg.
<br><br>
DIN 1986-30, Deutsches Institut für Normung V. (DIN) (Hrsg.) (2003): Entwässerungsanlagen für Gebäude und Grundstücke - Teil 30: Instandhaltung. Berlin: Beuth Verlag GmbH.
<br><br>
DIN 1989-1, Deutsches Institut für Normung V. (DIN) (Hrsg.) (2002): Regenwassernutzungsanlagen - Teil 1: Planung, Ausführung, Betrieb und Wartung. Berlin: Beuth Verlag GmbH.
<br><br>
DIN 4034-1, Deutsches Institut für Normung V. (DIN) (Hrsg.) (2020): Schächte aus Beton-, Stahlfaserbeton- und Stahlbetonfertigteilen - Teil 1: Anforderungen, Prüfung und Kennzeichnung für Abwasserleitungen und -kanäle in Ergänzung zu DIN EN 1917:2003-04. Berlin: Beuth Verlag.
<br><br>
DIN 18531, Deutsches Institut für Normung V. (DIN) (Hrsg.) (2017): Abdichtung von Dächern sowie Balkonen Loggien und Laubengängen. Berlin: Beuth Verlag GmbH.
<br><br>
DIN 18915, Deutsches Institut für Normung V. (DIN) (Hrsg.) (2018): DIN 18915 - Vegetationstechnik im Landschaftsbau – Bodenarbeiten. Berlin: Beuth Verlag GmbH.
<br><br>
DIN 18916, Deutsches Institut für Normung V. (DIN) (Hrsg.) (2016): DIN 18916 - Vegetationstechnik im Landschaftsbau – Pflanzen und Pflanzarbeiten. Berlin: Beuth Verlag GmbH.
<br><br>
DIN 19650, Deutsches Institut für Normung V. (DIN) (Hrsg.) (1999): Bewässerung - Hygienische Belange von Bewässerungswasser. Berlin: Beuth Verlag doi: 10.31030/2484611.
<br><br>
DIN EN 752, Deutsches Institut für Normung V. (DIN) (Hrsg.) (2017): Entwässerungssysteme außerhalb von Gebäuden – Kanalmanagement. Berlin: Beuth Verlag.
<br><br>
DIN EN 16932-1, Deutsches Institut für Normung V. (DIN) (Hrsg.) (2018): Entwässerungssysteme außerhalb von Gebäuden - Pumpsysteme - Teil 1: Allgemeine Anforderungen; Deutsche Fassung EN 16932-1:2018. Berlin: Beuth Verlag.
<br><br>
DIN EN 16932-3, Deutsches Institut für Normung V. (DIN) (Hrsg.) (2018): Entwässerungssysteme außerhalb von Gebäuden - Pumpsysteme - Teil 3: Unterdruckentwässerungssysteme; Deutsche Fassung EN 16932-3:2018. Berlin: Beuth Verlag.
<br><br>
DIN EN 16941-1:2018-06 (2018): Vor-Ort Anlagen für Nicht-Trinkwasser - Teil 1: Anlagen für die Verwendung von Regenwasser; Deutsche Fassung EN 16941-1:2018. Berlin: Beuth Verlag GmbH.
<br><br>
Discovergy (2018): „Mieterstrom Webinar“. Abgerufen 26.06.2020 von https://discovergy.com/mieterstrom/webinar.
<br><br>
DKE (2013): „Technischer Leitfaden Ladeinfrastruktur“. Abgerufen 28.05.2020 von https://www.din.de/blob/97246/c0cbb8df0581d171e1dc7674941fe409/technischer-leitfaden-ladeinfrastruktur-data.pdf.
<br><br>
Dockhorn, T. (2006): „Ressourcenökonomische Anreize für ein zukunftsfähiges Stoffstrommanagement in der kommunalen Abwasserwirtschaft“. In: KA – Abwasser, Abfall. 53 (1), S. 7.
<br><br>
Doderer, Steffensen, Schäfer-Stradowsky (2018): „Positionspapier PtH Windnode“. Abgerufen 09.03.2020 von https://www.ikem.de/wp-content/uploads/2017/12/20171220_IKEM_Positionspapier_PtH_Windnode.pdf.
<br><br>
Doleski, O.D. (Hrsg.) (2020): Praxis der digitalen Energiewirtschaft vom Vertrieb bis zu innovativen Energy Services. Wiesbaden and Heidelberg: Springer Vieweg (Realisierung Utility 4.0 / Oliver D. Doleski, Hrsg).
<br><br>
Dörr, Kröger, Graf, Köppel (2016): „Power-to-Gas“. Abgerufen 03.01.2020 von https://www.dvgw-ebi.de/download/ewp_1116_50-59_Kroeger.pdf.
<br><br>
Dr. F. Dosch, S.H., J. Skowski, B.W., S. Willinger, T.A., F. Mayer, Dr.M.H., S. Mösch (2015): Grün in der Stadt - Für eine lebenswerte Zukunft, Grünbuch Stadtgrün. 1. Berlin: Bundesministerium für Umwelt, Naturschutz, Bau und Reaktorsicherheit (BMUB).
<br><br>
Dunkelberg, E., Gährs, S., Weiß, J., Salecki, S. (2018): Wirtschaftlichkeit von Mehrleiter-Wärmenetzen. Berlin: Institut für ökologische Wirtschaftsforschung (Schriftenreihe des IÖW 215/18).
<br><br>
DWA (2017): Bemessung von Kläranlagen in warmen und kalten Klimazonen. Hennef (Sieg): Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall (DWA) (DWA-Themen).
<br><br>
DWA (2008): Neuartige Sanitärsysteme. Hennef: Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall (DWA) (DWA-Themen).
<br><br>
DWA-A 116-1 (2005): DWA-Regelwerk: Besondere Entwässerungssysteme. Teil 1: Unterdruckentwässerungssysteme außerhalb von Gebäuden. Hennef (Sieg): Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall (DWA).
<br><br>
DWA-A 117 (2013): DWA-Regelwerk: Bemessung von Regenrückhalteräumen. 3. Aufl. Hennef: Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall e. V. (DWA).
<br><br>
DWA-A 138 (2005): DWA-Regelwerk: Planung, Bau und Betrieb von Anlagen zur Versickerung von Niederschlagswasser. Hennef: Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall e. V. (DWA).
<br><br>
DWA-A 272 (2014): DWA-Regelwerk: Grundsätze für die Planung und Implementierung Neuartiger Sanitärsysteme (NASS). Hennef (Sieg): Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall (DWA).
<br><br>
DWA-A/M 102/ BWK-A/M 3 (2020): DWA-Regelwerk: Grundsätze zur Bewirtschaftung und Behandlung von Regenwasserabflüssen zur Einleitung in Oberflächengewässer - Merkblattreihe Teil 1-4. Hennef: Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall e. V. (DWA).
<br><br>
DWA-M 114 (2020): DWA-Regelwerk: Abwasserwärmenutzung. Hennef (Sieg): Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall (DWA).
<br><br>
DWA-M 227 (2014): DWA-Regelwerk: Membran-Bioreaktor-Verfahren (MBR-Verfahren). Hennef: Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall (DWA).
<br><br>
DWA-M 277 (2017): DWA-Regelwerk: Hinweise zur Auslegung von Anlagen zur Behandlung und Nutzung von Grauwasser und Grauwasserteilströmen. Hennef (Sieg): Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall (DWA).
<br><br>
DWA-M 368 (2014): DWA-Regelwerk: Biologische Stabilisierung von Klärschlamm. Hennef (Sieg): Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall (DWA).
<br><br>
DWA-M 511 (2017): DWA-Regelwerk: Filter Geokunststoffe. Hennef: Deutsche Vereinigung für Wasserwirtschaft, Abwasser und Abfall (DWA).
<br><br>
e3dc (2020): „E3DC TDB S10“. HagerEnergy GmbH. Abgerufen 04.05.2020 von https://www.e3dc.com/fileadmin/mediacenter/downloads-fuer-kunden/E3DC_TDB_S10_E.pdf.
<br><br>
EAWAG (Hrsg.) (2019): fact sheet - Urinseparierung. Dübendorf.
<br><br>
ecocoach (2019): „Autarkes Quartier“. Abgerufen 25.03.2020 von https://ecocoach.com/news/presse/ecocoach_liefert_integrierte_Steuerung_fuer_autarkes_Quartier_mit_PV_Wasserkraft_und_Brennstoffzelle?search=Buochs#pressePost-press.
<br><br>
Eller, D. (2015): Integration erneuerbarer Energien mit Power-to-Heat in Deutschland: Potentiale zur Nutzung von Stromüberschüssen in Fernwärmenetzen. Wiesbaden: Springer Vieweg (BestMasters), doi: 10.1007/978-3-658-10561-7.
<br><br>
Eller, M., Veser, S. (2019): „ReLab – Real-Labor Campus Birkenfeld“.
<br><br>
Elmitwalli, T., Zeeman, G., Otterpohl, R. (2011): „Modelling anaerobic digestion of concentrated black water and faecal matter in accumulation system“. In: Water Science and Technology. 63 (9), S. 2039–2045, doi: 10.2166/wst.2011.458.
<br><br>
Energie Schweiz (2017): „Planungshandbuch Fernwärme“. Abgerufen 18.05.2020 von https://www.energie-zentralschweiz.ch/fileadmin/user_upload/Downloads/Planungshilfen/Planungshandbuch_Fernwarrme_V1.0x.pdf.
<br><br>
Energie Zentralschweiz (2017): „Planungshandbuch“. Abgerufen 18.05.2020 von https://www.energie-zentralschweiz.ch/fileadmin/user_upload/Downloads/Planungshilfen/Planungshandbuch_Fernwarrme_V1.0x.pdf.
<br><br>
Energieagentur NRW (2017a): „Kaltes Nahwärmenetz“. Abgerufen 08.04.2020 von https://www.energieagentur.nrw/eanrw/kaltes_nahwaermenetz.
<br><br>
Energieagentur NRW (2017b): „Kaltes Nahwärmenetz spart 40.000 kg CO2 im Jahr“. Abgerufen 08.10.2021 von https://www.klimaschutz.nrw.de/best-practice/kaltes-nahwaermenetz-spart-40000-kg-co2-im-jahr.
<br><br>
Energieheld (2019): „Vergleich der Anschaffungskosten verschiedener Heizsysteme in Deutschland im Jahr 2021“. Statista. Abgerufen 02.12.2021 von https://de.statista.com/statistik/daten/studie/380742/umfrage/anschaffungskosten-verschiedener-heizsystem-in-deutschland/.
<br><br>
energiesprong (2020a): „Das Energiesprong-Prinzip“. Abgerufen 23.03.2020 von https://www.energiesprong.de/fileadmin/Energiesprong/Dokumente/Energiesprong-Prinzip.pdf.
<br><br>
energiesprong (2020b): „Pilotprojekt Hameln“. Abgerufen 23.03.2020 von https://www.energiesprong.de/marktentwicklung-aktuell/aktuelle-prototypen/pilotprojekt-hameln/.
<br><br>
EnerTwin (2020): „Mikro-KWK“. Abgerufen 11.05.2020 von https://www.enertwin.com/enertwin-de/mikro-kwk.
<br><br>
Enkhardt, S. (2019): „Porto Santo - Fossilfreie Insel in Europa“. pv-magazine.de. Abgerufen 20.03.2020 von https://www.pv-magazine.de/2019/05/24/porto-santo-auf-dem-weg-zur-ersten-smart-fossil-free-island-in-europa/.
<br><br>
e.on (2020): „Smart Grid“. Abgerufen 16.03.2020 von https://www.eon.de/de/eonerleben/smart-grid-so-funktioniert-das-intelligente-stromnetz.html.
<br><br>
Erb, M., Peter, H., Ehrbar, M. (2004): Feldanalyse von Wärmepumpenanlagen FAWA 1996 - 2003. (Schlussbericht) Bundesamt für Energie (BFE).
<br><br>
ErneuerbareEnergien (2017): „Wuppertaler Stadtwerke gründen regionalen Marktplatz für EE-Strom“. Abgerufen 08.12.2021 von https://www.erneuerbareenergien.de/markt/windmarkt/blockchain-wuppertaler-stadtwerke-gruenden-regionalen-marktplatz-fuer-ee-strom.
<br><br>
ES-2.3, D.-A. (2010): „Hinweise zur Bemessung von Unterdruckentwässerungssystemen nach Arbeitsblatt DWA-A 116-1“. In: Korrespondenz Abwasser, Abfall (KA). 57 (3), S. 222–228.
<br><br>
Etter, B., Udert, K. (2015): „Aus Urin wird Flüssigdünger“. In: EAWAG Newsletter. 1 .
<br><br>
Etter, B., Udert, K. (2016): VUNA Handbook on Urine Treatment. Dübendorf (Schweiz): Eawag.
<br><br>
EUWID (2020): „Dossier Power-to-Gas“. Abgerufen 15.04.2020 von https://www.euwid-energie.de/dossier-power-to-gas-fuer-die-energiewende/.
<br><br>
Ewert, W., Wagenbach, A. (2014): „AirPrex: MAP‐Kristallisation in Verbindung mit Bio‐P‐Fällung“. Berlin.
<br><br>
EWZ (2019): „Greencity - Eine ganzheitliche Energielösung für ein neues Quartier“. Abgerufen 13.10.2021 von https://www.ewz.ch/content/dam/ewz/dae/q-plattform/dokumente/ewz-success-story-greencity-de.pdf.
<br><br>
fbr, Fachvereinigung Betriebs- und Regenwassernutzung (Hrsg.) (2016): fbr-Hinweisblatt H 101: Kombination der Regenwassernutzung mit der Regenwasserversickerung. Darmstadt: fbr-Dialog GmbH.
<br><br>
fbr (2005): Hinweisblatt H 201: Grauwasser-Recycling - Planungsgrundlagen und Betriebshinweise. Darmstadt: fbr - Fachvereinigung Betriebs- und Regenwassernutzung.
<br><br>
fbr-H 201 (2005): Grauwasser-Recycling: Planungsgrundlagen und Betriebshinweise. (fbr Hinweisblatt) Darmstadt: Fachvereinigung Betriebs- und Regenwassernutzung e. V. (fbr).
<br><br>
ffe (2016a): „Demand-Side-Management in Haushalten als netzoptimierende Maßnahme“. Forschungsstelle für Energiewirtschaft. Abgerufen 27.04.2020 von https://www.ffe.de/publikationen/veroeffentlichungen/649-demand-side-management-in-haushalten-als-netzoptimierende-massnahme.
<br><br>
ffe (2017): „Kostenanalyse Wärmespeicher“. Forschungsstelle für Energiewirtschaft e.V. Abgerufen 25.05.2020 von https://www.ffe.de/publikationen/veroeffentlichungen/659-kostenanalyse-waermespeicher-bis-10-000-l-speichergroesse.
<br><br>
ffe (2010): „Methodik DSM“. Forschungsstelle für Energiewirtschaft e.V. Abgerufen 05.05.2020 von https://www.ffe.de/download/wissen/20100406_Methodik_DSM.pdf.

ffe (2016b): „MOS Speichertechnologien“. Forschungsstelle für Energiewirtschaft. Abgerufen 29.05.2020 von https://www.ffe.de/images/stories/Themen/414_MOS/20160728_MOS_Speichertechnologien.pdf.
<br><br>
ffe (2016c): „Speichertechnologien“. Forschungsstelle für Energiewirtschaft e.V. Abgerufen 25.05.2020 von https://www.ffe.de/images/stories/Themen/414_MOS/20160728_MOS_Speichertechnologien.pdf.
<br><br>
FGSV (2006): Richtlinien für die Anlage von Stadtstraßen. FGSV.
<br><br>
FGSV (2005): Richtlinien für die Anlage von Straßen RAS. Teil: Entwässerung. Köln: FGSV Verlag.
<br><br>
FLL, Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V. (FLL) (Hrsg.) (2015a): Bewässerungsrichtlinien - Richtlinien für die Planung, Installation und Instandhaltung von Bewässerungsanlagen in Vegetationsflächen. 2. Aufl. Bonn: Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V. (FLL).
<br><br>
FLL, Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e. V. (FLL) (Hrsg.) (2018a): Dachbegrünungsrichtlinien – Richtlinien für die Planung, Bau und Instandhaltungen von Dachbegrünungen. Bonn: Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V.
<br><br>
FLL, Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V. (FLL) (Hrsg.) (2010): Empfehlungen für Baumpflanzungen - Teil 2: Standortvorbereitungen für Neupflanzungen; Pflanzgruben und Wurzelraumerweiterung, Bauweisen und Substrate. Bonn.
<br><br>
FLL, Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau (Hrsg.) (2015b): Empfehlungen für Baumpflanzungen. Teil 1: Planung, Pflanzarbeiten, Pflege. Bonn: FLL Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V.
<br><br>
FLL, Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V. (FLL) (Hrsg.) (2012): Empfehlungen für Planung, Bau und Instandhaltung der Übergangsbereiche von Freiflächen zu Gebäuden. Bonn: FLL Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V.
<br><br>
FLL, Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V. (FLL) (Hrsg.) (2005): Empfehlungen zur Versickerung und Wasserrückhaltung. Bonn: FLL Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V.
<br><br>
FLL, Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V. (Hrsg.) (2018b): Fassadenbegrünungsrichtlinien - Richtlinien für die Planng, Ausführung und Pflege der Wand- und Fassadenbegrünungen. 3. Aufl. Bonn: Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V.
<br><br>
FLL, Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V. (FLL) (Hrsg.) (2015c): Gütebestimmungen für Stauden. Bonn: FLL Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V.
<br><br>
FLL, FLL Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V. (Hrsg.) (2018c): Leitfaden, nachhaltige Freianlagen. 1. Aufl. Bonn: FLL Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V.
<br><br>
FLL, Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V. (FLL) (Hrsg.) (2020): TL-Baumschulpflanzen - Technische Lieferbedingungen für Baumschulpflanzen (Gütebestimmungen). Bonn: FLL Forschungsgesellschaft Landschaftsentwicklung Landschaftsbau e.V.
<br><br>
Flynn, K.M., Traver, R.G. (2013): „Green infrastructure life cycle assessment: A bio-infiltration case study“. In: Ecological engineering. Elsevier 55 , S. 9–22.
<br><br>
FNR (2020): „Biomasseheizwerke“. Abgerufen 16.04.2020 von https://heizen.fnr.de/biomasseanlagen/biomasseheizwerke/.
<br><br>
FNR (2014): „Leitfaden feste Biobrennstoffe“. Abgerufen 19.05.2020 von https://www.fnr.de/fileadmin/allgemein/pdf/broschueren/leitfadenfestebiobrennstoffe_web.pdf.
<br><br>
FNR (2017): „Marktübersicht Hackschnitzelheizungen“. Abgerufen 08.10.2021 von http://www.fnr.de/fileadmin/allgemein/pdf/broschueren/hackschnitzel-heizungen_web.pdf.
<br><br>
Franz Rother, Lothar Kuhn (2018): „Vehicle to Grid - wie ein Elektroauto das Stromnetz stabilisiert“. Abgerufen 20.03.2020 von https://edison.media/ertraeumen/vehicle-to-grid-wie-ein-elektroauto-das-stromnetz-stabilisiert/23228592.html.
<br><br>
Fraunhofer IGB (o. J.): DEUS 21 - Regeneratives Wassermanagement - Abwasserreinigung durch Verwertung der Inhaltsstoffe. (Broschüre) Frauenhofer-Institut für Grenzflächen- und Bioverfahrenstechnik IGB.
<br><br>
Fraunhofer UMSICHT (2020): „Leitfaden Nahwärme“. Abgerufen 18.05.2020 von https://www.umsicht.fraunhofer.de/content/dam/umsicht/de/dokumente/kompetenz/energie/leitfaden-nahwaerme.pdf.
<br><br>
Friedl, Bliem, Aigner, Haber, Schmautzer (2014): „Gesamtwirtschaftliche Bewertung von Smart-Grids - Lösungen anhand einer Kosten-Nutzen-Analyse“. Abgerufen 20.04.2020 von https://www.tugraz.at/fileadmin/user_upload/Events/Eninnov2014/files/lf/LF_Friedl.pdf.
<br><br>
Fronius Solar Energy (2020): „Wasserstoff als Energieträger“. Abgerufen 15.04.2020 von https://www.fronius.com/de/solarenergie/infocenter/news/wasserstoff-als-energietraeger-111018.
<br><br>
Fuchsberger, R., Phillip, M., Renz, T., Schmidt, E., Stürmer, A. (o. J.): Bewusster Umgang mit Wasser. (Projektbericht) München: Technische Universität München (TUM).
<br><br>
Gallert, C., Winter, J., Svardal, K. (2015): „Grundlagen anaerober Prozesse“. In: Rosenwinkel, K.-H., Kroiss, H., Dichtl, N., et al. (Hrsg.) Anaerobtechnik. Berlin, Heidelberg: Springer Berlin Heidelberg S. 19–79, doi: 10.1007/978-3-642-24895-5_2.
<br><br>
Gammel Engineering (2020): „Biomasse-Heizwerk“. Abgerufen 16.04.2020 von https://www.gammel.de/de/lexikon/Biomasse-Heizwerk/4767?
<br><br>
Gao, M., Zhang, L., Liu, Y. (2020): „High-loading food waste and blackwater anaerobic co-digestion: Maximizing bioenergy recovery“. In: Chemical Engineering Journal. 394 , S. 124911, doi: 10.1016/j.cej.2020.124911.
<br><br>
Gargari, C., Bibbiani, C., Fantozzi, F., Campiotti, C.A. (2016): „Environmental impact of Green roofing: the contribute of a green roof to the sustainable use of natural resources in a life cycle approach“. In: Agriculture and Agricultural Science Procedia. Elsevier 8 , S. 646–656.
<br><br>
GE renewable energy (2019): „Haliade X Offshore Turbine“. Abgerufen 19.01.2020 von https://www.ge.com/renewableenergy/wind-energy/offshore-wind/haliade-x-offshore-turbine.
<br><br>
Geberit International AG (2017): Umweltproduktdeklaration gemäß EN 15804 für die Produkte Geberit Urinale Preda und Selva. Jona (Schweiz).
<br><br>
gec-co (2018): „Vorbereitung und Begleitung bei der Erstellung eines Erfahrungsberichts gemäß \S 97 Erneuerbare-Energien-Gesetz: Geothermie“. Abgerufen 06.04.2020 von https://www.erneuerbare-energien.de/EE/Redaktion/DE/Downloads/bmwi_de/bericht-eeg-3-geothermie.pdf?__blob=publicationFile&v=7.
<br><br>
Geologischer Dienst NRW (2019): „Oberflächennahe Geothermie“. Abgerufen 13.10.2021 von https://www.gd.nrw.de/ew_og.htm.
<br><br>
Geothermie Unterhaching (2019): „Datenblatt Geothermie Unterhaching“. Abgerufen 11.11.2019 von https://www.geothermie-unterhaching.de/cms/geothermie/web.nsf/gfx/4A6EC4D8FE00F359C1258478002D7DF6/$file/Datenblatt%20Geothermie%20Unterhaching%202019.pdf.
<br><br>
Getec-Energyservices (2020): „Power-to-Heat“. Abgerufen 09.03.2020 von https://www.getec-energyservices.com/Start/Technologien/Power-To-Heat/.
<br><br>
Ghimire, S.R., Johnston, J.M., Ingwersen, W.W., Hawkins, T.R. (2014): „Life cycle assessment of domestic and agricultural rainwater harvesting systems“. In: Environmental science & technology. ACS Publications 48 (7), S. 4069–4077.
<br><br>

Giel, T. (2017): Kalte Nahwärmenetze.
<br><br>
Giese, T., Londong, J. (Hrsg.) (2015): Kopplung von regenerativer Energiegewinnung mit innovativer Stadtentwässerung: Synthesebericht zum Forschungsprojekt KREIS. Berlin: Rhombos-Verlag (Schriftenreihe des Bauhaus-Instituts für zukunftsweisende Infrastruktursysteme).
<br><br>
Giesecke, J., Heimerl, S., Mosonyi, E. (2014): Wasserkraftanlagen: Planung, Bau und Betrieb. 6., aktualisierte und erweiterte Auflage. Berlin and Heidelberg: Springer Vieweg doi: 10.1007/978-3-642-53871-1.
<br><br>
de Graaf, R. (2018): Finanzökonomische Analyse 2017 Norrderhoek Waterschoon in Sneek (in Dutch). ( Nr. 63A) Amersfoort: STOWA.
<br><br>
de Graaff, M.S. de, Temmink, H., Zeeman, G., Buisman, C.J.N. (2010): „Anaerobic Treatment of Concentrated Black Water in a UASB Reactor at a Short HRT“. In: Water. 2 (1), S. 101–119, doi: 10.3390/w2010101.
<br><br>
Greenhouse Media (2019): „Sektorenkopplung Power-to-Heat“. Abgerufen 30.03.2020 von https://www.energie-experten.org/erneuerbare-energien/oekostrom/sektorkopplung/power-to-heat.html.
<br><br>
Grömping, M. (o. J.): „Prozesswasserbehandlung Strippung / Saure Wäsche Kläranlage Wallau“. ATEMIS GmbH. Abgerufen 05.01.2022 von https://www.atemis.net/ref/abwasser/Straubing_Luftstrippung_Saure_Waesche.pdf.
<br><br>
Gusik, F. (o. J.): „Prozesswasserbehandlung Strippung / Saure Wäsche V-ARA Spittal / Drau (Österreich)“. ATEMIS GmbH.
<br><br>
Hagedorn, V. (2019): Wohnquartiere mit einem Niedrig-Temperatur-Wärmenetz: Eine modellgestützte Analyse zentraler und dezentraler Energieversorgungssysteme. Wiesbaden and Heidelberg: Springer Spektrum (BestMasters).
<br><br>
Hamann, A. (2015): Grundlagen der Abwasserwärmenutzung: Leitfaden für Architekten, Ingenieure und Stadtplaner. Stuttgart: Fraunhofer IRB Verlag.
<br><br>
Hamburg Institut (2016): „Leitfaden Förderung Solarthermie“. Abgerufen 14.05.2020 von https://www.hamburg-institut.com/images/pdf/forschungsberichte/160725_Frderleitfaden_2%20%20Auflage.pdf.
<br><br>
Hamburg Wasser (2017): Hamburg Water Cycle: Jenfelder Au - Fragen und Antworten. (Broschüre) Hamburg: Hamburg Wasser.
<br><br>
Härtel, T. (2018): Optimierung der Regelung zur Wärmeverteilung am Netzknoten und Auswertung der Informationen aus der MSR für die Energiekostenabrechnung der Mieter im Ubineum Zwickau. Westsächsische Hochschule Zwickau.
<br><br>
Hau, E. (2016): Windkraftanlagen: Grundlagen, Technik, Einsatz, Wirtschaftlichkeit. 6. Auflage. Berlin: Springer Vieweg doi: 10.1007/978-3-662-53154-9.
<br><br>
Hefter, T., Birzle-Harder, B., Deffner, J. (2015): Akzeptanz von Grauwasserbehandlung und Wärmerückgewinnung im Wohnungsbau Ergebnisse einer qualitativen Bewohnerbefragung. Berlin: Deutsches Institut für Urbanistik gGmbH.
<br><br>
Heinlein, B. (2014): „Rechtsrahmen von Smart Grids und Smart Markets“. In: Aichele, C., Doleski, O.D. (Hrsg.) Smart Market. Wiesbaden: Springer Fachmedien Wiesbaden S. 53–81.
<br><br>
Heinzmann, B. (2018): „Großtechnische Phosphor-Rückgewinnung auf der Kläranlage Waßmannsdorf [Produkt „Berliner Pflanze“]“. Osnabrück: Berliner Wasserbetriebe.
<br><br>
heizsparer (2019): „Wärmepumpen Kosten“. Abgerufen 13.10.2021 von https://www.heizsparer.de/heizung/heizungssysteme/waermepumpe/waermepumpen-kosten.
<br><br>
Hermann, A., Palm, F. (2020): „Evaluation des Einsatzes der Blockchaintechnologie im Abrechnungssystem eines lokalen dezentralen Energiemarktes“. In: Neumann, T., Ziesler, U., Teich, T. (Hrsg.) Kooperation und Innovation für eine nachhaltige Stadtentwicklung. Wiesbaden: Springer Fachmedien Wiesbaden S. 245–257, doi: 10.1007/978-3-658-29554-7‗ 16.
<br><br>
Hertel, S., Navarro, P., Deegener, S., Körner, I. (2015): „Biogas and nutrients from blackwater, lawn cuttings and grease trap residues—experiments for Hamburg’s Jenfelder Au district“. In: Energy, Sustainability and Society. 5 (1), S. 29, doi: 10.1186/s13705-015-0057-5.
<br><br>
Hoffmann, Härtel, Schwind, Theil (2020): „Sanierung der Energieeffizienz in der Wärmeversorgung von Wohnquartieren“. In: Kooperation und Innovation nachhaltiger Stadtentwicklung. SpringerSpektrum S. 259–269.
<br><br>
Home Power Solutions (2015): „Dreamteam Photovoltaik und Brennstoffzelle“. Abgerufen 15.04.2020 von https://www.homepowersolutions.de/downloads/mein%20sch%C3%B6nes%20zuhause%C2%B0%C2%B0%C2%B0%20152-153_HPS_Weberhaus.pdf.
<br><br>
von Horn, J., Maurer, M., Londong, J., Lautenschläger, S., Steinmetz, H., Hillebrand, T., Dockhorn, T. (2013): „Welche neuartigen Sanitärsysteme (NASS) sind für Deutschland besonders Erfolg versprechend?“. In: Welche neuartigen Sanitärsysteme (NASS) sind für Deutschland besonders Erfolg versprechend?. 2013 (8), S. 673–683, doi: 10.3242/kae2013.08.002.
<br><br>
HTW Berlin (2013): „Empfehlungen zum Einsatz kleiner Windenergieanlagen im urbanen Raum“. Abgerufen 08.05.2020 von http://www.aee-now.at/cms/fileadmin/downloads/allgemein/Kleinwind/Kleinwind_Handlungsempfehlungen_HTW-Berlin.pdf.
<br><br>
Huber (2022): „Abwasserwärmetauscher RoWin“. Huber Technology Waste Water Solutions. Abgerufen 05.01.2022 von https://www.huber.de/fileadmin/01_products/11_energy_from_ww/11_rowin/pro_rowin_de.pdf.
<br><br>
IINAS (2015): „GEMIS-Datenbank, Heizen 2015“. Internationale Institut für Nachhaltigkeitsanalysen und -strategien (IINAS).
<br><br>
IINAS (2020): „GEMIS-Datenbank, Strom 2020“. Internationale Institut für Nachhaltigkeitsanalysen und -strategien (IINAS).
<br><br>
Industrieverband Agrar (2022): „Wie ist das Düngemittelrecht in Deutschland strukturiert?“. Abgerufen 05.01.2022 von https://www.iva.de/verband/pflanzenernaehrung/faq-haeufig-gestellte-fragen/duengemittelrecht/wie-ist-das-duengemittelrecht-deutschland.
<br><br>
Irrek, W., Thomas, S. (2008): „Definition Energieeffizienz“. Abgerufen von https://wupperinst.org/fa/redaktion/downloads/misc/energieeffizienz_definition.pdf.
<br><br>
Jordehi, A.R. (2019): „Optimisation of demand response in electric power systems, a review“. In: Renewable and Sustainable Energy Reviews. 103 , S. 308–319, doi: 10.1016/j.rser.2018.12.054.
<br><br>
Joseph-Stiftung (2020): „Wasserkraftwerk“. Abgerufen 25.03.2020 von https://www.joseph-stiftung.de/portraet/wasserkraftwerk.
<br><br>
Jüttemann, P. (2020): „Ein windstarker Standort ist das A und O“. Abgerufen 20.05.2020 von https://www.klein-windkraftanlagen.com/basisinfo/standort/.
<br><br>
Kaltschmitt, M., Hartmann, H., Hofbauer, H. (Hrsg.) (2009): Energie aus Biomasse. Berlin, Heidelberg: Springer Berlin Heidelberg doi: 10.1007/978-3-540-85095-3.
<br><br>
KEAN (2019): „PV-Speicher Beratungsmappe“. Abgerufen 08.05.2020 von https://www.klimaschutz-niedersachsen.de/_Resources/Persistent/d3e3548c42db20eb523ee592bdabb0d9ec3b14ab/NDS_PVSpeicher_Info_fuer_Beratungsmappe.pdf.
<br><br>
Keuneke, Dipl.-Ing.R. (2015): „Marktanalyse zur Vorbereitung von Ausschreibungen Vorhaben IId, Wasserkraft“. erneuerbare-energien.de. Abgerufen 06.08.2020 von https://www.erneuerbare-energien.de/EE/Redaktion/DE/Downloads/bmwi_de/marktanalysen-studie-wasserkraft.pdf?__blob=publicationFile&v=4.
<br><br>
Kisser, J., Wirth, M., De Gusseme, B., Van Eekert, M., Zeeman, G., Schoenborn, A., Vinnerås, B., Finger, D.C., Kolbl Repinc, S., Bulc, T.G., Bani, A., Pavlova, D., Staicu, L.C., Atasoy, M., Cetecioglu, Z., Kokko, M., Haznedaroglu, B.Z., Hansen, J., Istenič, D., Canga, E., Malamis, S., Camilleri-Fenech, M., Beesley, L. (2020): „A review of nature-based solutions for resource recovery in cities“. In: Blue-Green Systems. doi: 10.2166/bgs.2020.930.
<br><br>
Kjerstadius, H., Haghighatafshar, S., Davidsson, Å. (2015): „Potential for nutrient recovery and biogas production from blackwater, food waste and greywater in urban source control systems“. In: Environmental Technology. 36 (13), S. 1707–1720, doi: 10.1080/09593330.2015.1007089.
<br><br>
Klemm, C., Vennemann, P. (2021): „Modeling and optimization of multi-energy systems in mixed-use districts: A review of existing methods and approaches“. In: Renewable and Sustainable Energy Reviews. 135 , S. 110206, doi: 10.1016/j.rser.2020.110206.
<br><br>
Kloth, P. (2020): „Hersteller von Solarthermie-Anlagen - eine Übersicht“. energieheld. Abgerufen von https://www.energieheld.de/solaranlage/solarthermie/hersteller-und-partner.
<br><br>
Knies, J. (2015): „The Potential for Extracting Heat Energy from Waste Water: A Strategic Approach“. In: Journal for Geographic Information Science. 3 , S. 189–198, doi: 10.1553/giscience2015s189.
<br><br>
Knop, I. (2011): „Beitrag von Wärmepumpsystemen und Wärmespeichern zur Integration erneuerbarer Energien“. Abgerufen von https://www.tugraz.at/fileadmin/user_upload/Events/Eninnov2016/files/pr/Stream_F/Session_F2/PR_Knop.pdf.
<br><br>
Koenzen, U. (2020): „lokSMART“. Abgerufen 19.03.2020 von https://www.loksmart.de/.
<br><br>
Konstantin, M. (2018): Praxisbuch der Fernwärmeversorgung: Systeme, Netzaufbauvarianten, Kraft-Wärme-Kopplung, Kostenstrukturen und Preisbildung. Berlin: Springer Vieweg doi: 10.1007/978-3-662-55911-6.
<br><br>
Koschi, C., Zahner-Meike, E., Kexel, S. (2008): Bepflanzte Bodenfilter zur Reinigung häuslichen Abwassers in Kleinkläranlagen. Augsburg: Bayerisches Landesamt für Umwelt.
<br><br>
Koth, P. (2020): „Nachtspeicherheizung“. Abgerufen 21.04.2020 von https://www.energieheld.de/heizung/elektroheizung/nachtspeicherheizung.
<br><br>
Kradisch, A. (2020): „Wärmespeicher n-ergie“. Abgerufen 25.05.2020 von https://www.fotodesign-kradisch.de/.
<br><br>
Kreditanstalt für Wiederaufbau (2020): „Das KfW-Effizienzhaus“. Abgerufen 24.04.2020 von https://www.kfw.de/inlandsfoerderung/Privatpersonen/Neubau/Das-KfW-Effizienzhaus/.
<br><br>
Kühl, A. (2018): „Erlebnis Elektromobilität und zukunftsfähiges Stadtquartier Franklin auf der Smart-Grids BW Bloggertour 2018“. Energynet. Abgerufen 16.03.2020 von https://www.energynet.de/2018/03/21/smart-grids-bw-bloggertour-2018/.
<br><br>
Kujawa, K. (2005): Anaerobic Treatment of Concentrated Wastewater in DESAR Concept (in Dutch). Utrecht: STOWA.
<br><br>
Kurzweil, P., Dietlmeier, O. (2018): Elektrochemische Speicher: Superkondensatoren, Batterien, Elektrolyse-Wasserstoff, rechtliche Rahmenbedingungen. 2., aktualisierte und erweiterte Auflage. Wiesbaden: Springer Vieweg.
<br><br>
Larsen, T.A., Lienert, J. (2007): NoMix – Neue Wege in der Siedlungswasserwirtschaft. (Novaquatis Abschlussbericht) Dübendorf (Schweiz): Eawag.
<br><br>
Larsen, T.A., Riechmann, M.E., Udert, K.M. (2021): „State of the art of urine treatment technologies: A critical review.“. In: Water Research X. S. 100114, doi: 10.1016/j.wroa.2021.100114.
<br><br>
Lettinga, G., van Velsen, A.F.M., Hobma, S.W., de Zeeuw, W., Klapwijk, A. (1980): „Use of the upflow sludge blanket (USB) reactor concept for biological wastewater treatment, especially for anaerobic treatment“. In: Biotechnology and Bioengineering. 22 (4), S. 699–734, doi: 10.1002/bit.260220402.
<br><br>
lumenion (2020): „Hochtemperaturspeicher“. Abgerufen 30.03.2020 von https://lumenion.com/produkt-2.
<br><br>
M GeoK E (2016): Merkblatt über die Anwendung von Geokunststoffen im Erdbau des Straßenbaus. Berlin: FGSV.
<br><br>
Maier, M. (2017): „Grosswärmespeicher - zentraler Baustein einer flexiblen Strom- und Wärmeversorgung“. unendlich-viel-energie.de. Abgerufen 11.03.2020 von https://www.unendlich-viel-energie.de/media/file/1201.80_Renews_Spezial_Waermespeicher_Jul17.pdf.
<br><br>
Marazzi, L. (2016): „greencity“. Abgerufen 25.03.2020 von http://www.greencity.ch/de/areal/.
<br><br>
Meinzinger, F., Oldenburg, M. (2009): „Characteristics of source-separated household wastewater flows: a statistical assessment“. In: Water Science and Technology. 59 (9), S. 1785–1791, doi: 10.2166/wst.2009.185.
<br><br>
Menger-Krug, E., Niederste-Hollenberg, J., Hillenbrand, T., Hummen, T., Feldmann, U., Garcia, A.P. (2015): „Ökologische Bewertung des AQUALOOP Systems“. Karlsruhe.
<br><br>
Michael Laskowski (2013): „E-Energy: E-DeMa: Entwicklung und Demonstration dezentral vernetzter Energiesysteme hin zum E-Energy-Marktplatz der Zukunft“. Abgerufen 21.12.2021 von https://www.e-dema.de/datas/150_dpi_E-DeMa_Abschlussbericht_final.pdf.
<br><br>
Ministerium für Umwelt, Klima und Energiewirtschaft Baden-Württemberg (2019): „Freiflächensolaranlagen“. Abgerufen 07.10.2021 von https://um.baden-wuerttemberg.de/fileadmin/redaktion/m-um/intern/Dateien/Dokumente/2_Presse_und_Service/Publikationen/Energie/Handlungsleitfaden_Freiflaechensolaranlagen.pdf.
<br><br>
Mohr, M., Iden, J., Beckett, M. (2016): Guideline: Vacuum sewer systems. Stuttgart: Fraunhofer-Institut für Grenzflächen- und Bioverfahrenstechnik IGB.
<br><br>
Montag, D., Everding, W., Malms, S., Pinnekamp, J., Reinhardt, J., Fehrenbach, H., Arnold, U., Trimborn, M., Goldbach, H., Klett, W., Lammers, T. (2015): Bewertung konkreter Maßnahmen einer weitergehenden Phosphorrückgewinnung aus relevanten Stoffströmen sowie zum effizienten Phosphoreinsatz. ( Nr. 3713 26 301, UBA-FB 002120) Dessau-Roßlau: Umweltbundesamt (UBA).
<br><br>
Morales-Pinzón, T., Rieradevall, J., Gasol, C.M., Gabarrell, X. (2015): „Modelling for economic cost and environmental analysis of rainwater harvesting systems“. In: Journal of Cleaner Production. Elsevier 87 , S. 613–626.
<br><br>
Müller, B. (2019): „PVT-Kollektoren“. Abgerufen 08.10.2021 von https://www.dgs.de/fileadmin/newsletter/2019/Intersolar_2019_Mueller.pdf.
<br><br>
Müller, E., Butz, J. (2010): „Abwasserwärmenutzung in Deutschland - Aktueller Stand und Ausblick“. In: Korrespondenz Abwasser, Abfall (KA). 57 (5), S. 457–462, doi: 10.3242/kae2010.05.002.
<br><br>
Naturstrom AG (2018): „Energiewende-Quartier Möckernkiez füllt sich mit Leben“. Abgerufen 31.03.2020 von https://www.naturstrom.de/ueber-uns/presse/news-detail/energiewende-quartier-moeckernkiez-fuellt-sich-mit-leben/.
<br><br>
N-Energie (2020): „N-Ergie“. Abgerufen 25.05.2020 von https://www.n-ergie.de/public/remotemedien/media/n_ergie/internet/die_n_ergie/unternehmen_1/unsere_energie/kraftwerkstandort/Waermespeicher_Funktionsweise_Illustration.pdf.
<br><br>
NeoVenti (2020): „Windwalze NeoVenti“. Abgerufen 07.05.2020 von https://www.neoventi.de/produkt/#wirkungsweise.
<br><br>
Neumann, T., Ziesler, U., Teich, T. (Hrsg.) (2020): Kooperation und Innovation für eine nachhaltige Stadtentwicklung. Wiesbaden: Springer Fachmedien Wiesbaden doi: 10.1007/978-3-658-29554-7.
<br><br>
Niedersächsisches Ministerium für Umwelt, Energie, Bauen und Klimaschutz (2020): „Biomassenutzung“. Abgerufen 16.04.2020 von https://www.umwelt.niedersachsen.de/themen/energie/erneuerbare_energien/bioenergie/biomassenutzung/biomassenutzung-121352.html.
<br><br>
Nolde, E. (2016): Steigerung der Energieerträge bei der Wärmerückgewinnung aus Grauwasser. (Endbericht des DBU Projekts AZ 32156-24) Berlin.
<br><br>
Oehler, S. (2018): Emissionsfreie Gebäude. Wiesbaden: Springer Fachmedien Wiesbaden doi: 10.1007/978-3-658-16056-2.
<br><br>
Oldenburg, M., Rohde, R., Wuttke, M., Kuck, W., Hamburger Stadtentwässerung AöR (Hrsg.) (2015): Handbuch Unterdruckentwässerung - Ein Leitfaden für die Installation in Gebäuden. Hamburg.
<br><br>
Ottelé, M., Perini, K., Haas, E.M. (2014): „Life cycle assessment (LCA) of green façades and living wall systems“. In: Eco-efficient construction and building materials. Elsevier S. 457–483.
<br><br>
Pablo Santiago (2019): „Strombeschaffungspreise im Discovergy Portal“. Abgerufen 21.12.2021 von https://discovergy.com/blog/boersenstrompreise-ansicht.
<br><br>
Palla, A., Gnecco, I. (2015): „Hydrologic modeling of Low Impact Development systems at the urban catchment scale“. In: Journal of Hydrology. 528 , S. 361–368, doi: 10.1016/j.jhydrol.2015.06.050.
<br><br>
Paschotta, R. (2019): „Solarstromspeicher“. Abgerufen 02.12.2019 von https://www.energie-lexikon.info/solarstromspeicher.html.
<br><br>
Pebbles (2020): „Pebbles“. Abgerufen 24.04.2020 von https://pebbles-projekt.de/projekt/.
<br><br>
Pehnt, M. (2017): „Wärmenetzsysteme 4.0“. Abgerufen 08.10.2021 von https://www.dena.de/fileadmin/dena/Dokumente/Themen_und_Projekte/Gebaeude/Rahmenvertrag_BMWi/Studie_Umsetzung_Modellvorhaben_erneuerbare_Energien_hocheffiziente_saisonalspeichergestuetzte_Niedertemperaturwaermenetze.pdf.
<br><br>
af Petersens, E., Johansson, M., Andersson, J. (2001): Market survey – extremely low flush toilets plus urine diverting toiletsand urinals for collection of black water and/or urine. Uppsala: Water Revival Systems Uppsala AB, SwedEviro Cosulting Group.
<br><br>
Pewo Energietechnik GmbH (2020): „Übergabestation PEWO“. Abgerufen 14.05.2020 von https://www.pewo.com/produkte/uebergabestationen/.
<br><br>
PFI Planungsgemeinschaft GmbH & C KG (2021): „Phosphorrecycling durch Fällung von Magnesium-Ammonium-Phosphat (MAP) auf dem Klärwerk Steinhof“. Abgerufen 22.02.2021 von https://www.pfi.de/phosphorrecycling-durch-faellung-von-magnesium-ammonium-phosphat-map-auf-dem-klaerwerk-steinhof/.
<br><br>
PFI Planungsgemeinschaft GmbH & Co KG (2021): „Stickstoffrückgewinnung durch Ammoniak-Strippung auf dem Klärwerk Steinhof“. Abgerufen 23.02.2021 von https://www.pfi.de/stickstoffrueckgewinnung-durch-ammoniak-strippung-auf-dem-klaerwerk-steinhof-2/.
<br><br>
Pilz, A. (2017): „Pellets für ökologische Siedlung“. Abgerufen 17.04.2020 von https://www.gih.de/wp-content/uploads/2017/12/EnergieKOMPAKT_06_2017_-Pellets_f%C3%BCr_%C3%B6kologische_Siedlung.pdf.
<br><br>
Polarstern (2020): „Smarte Quartiersentwicklung“. Abgerufen 18.06.2020 von https://www.polarstern-energie.de/mieterstrom/smarte-quartiersentwicklung/.
<br><br>
Reich, G., Reppich, M. (2018): Regenerative Energietechnik. Wiesbaden: Springer Fachmedien Wiesbaden doi: 10.1007/978-3-658-20608-6.
<br><br>
Reichmann, B., Nolde, E., Vansbotter, B., Rüden, H., Senatsverwaltung für Stadtentwicklung (Hrsg.) (2007): Innovative Wasserkonzepte - Betriebswassernutzung in Gebäuden. Berlin.
<br><br>
Reiterer, D. (2014): „Österreichische Gesellschaft für Umwelt und Technik“. Abgerufen 20.05.2020 von https://www.oegut.at/downloads/pdf/eb-kleinwindkraft_anhang5.pdf.
<br><br>
Riechel, M., Remy, C., Matzinger, A., Schwarzmüller, H., Rouault, P., Schmidt, M., Offermann, M., Strehl, C., Nickel, D., Sieker, H., Pallasch, M., Köhler, M., Kaiser, D., Möller, C., Büter, B., Leßmann, D., von Tils, R., Säumel, I., Pille, L., Winkler, A., Bartel, H., Heise, S., Heinzmann, B., Joswig, K., Rehfeld-Klein, M., Reichmann, B. (2017): Maßnahmensteckbriefe der Regenwasserbewirtschsaftung - Ergebnisse des Projektes KURAS. Berlin: Kompetenzzentrum Wasser Berlin gGmbH (KWB).
<br><br>
Ringkjøb, H.-K., Haugan, P.M., Solbrekke, I.M. (2018): „A review of modelling tools for energy and electricity systems with large shares of variable renewables“. In: Renewable and Sustainable Energy Reviews. 96 , S. 440–459, doi: 10.1016/j.rser.2018.08.002.
<br><br>
Römer, W. (2013): „Phosphor-Düngewirkung von P-Recyclingprodukten“. In: Korrespondenz Abwasser, Abfall (KA). 60 (3), S. 202–215, doi: 10.3242/kae2013.03.003.
<br><br>
Rosenwinkel, K.-H., Kroiss, H., Dichtl, N., Seyfried, C.-F., Weiland, P. (Hrsg.) (2015): Anaerobtechnik: Abwasser-, Schlamm- und Reststoffbehandlung, Biogasgewinnung. 3., neu bearb. Aufl. Berlin: Springer Vieweg.
<br><br>
RVT Process Equipment GmbH (2010): „Entfernung und Verwertung von Ammoniak aus Flüssigkeiten und Gasen“. Abgerufen 05.01.2022 von https://www.rvtpe.com/fileadmin/documents/print_and_publications/RVT_Ammoniak_Rueckgewinn_150423.pdf.
<br><br>
RWTH Aachen (2018): „Speichermonitoring“. Abgerufen 02.12.2019 von http://www.speichermonitoring.de/ueber-pv-speicher/studien.html.
<br><br>
Sanyé Mengual, E., Oliver i Solà, J. (2015): Sustainability assessment of urban rooftop farming using an interdisciplinary approach. Universitat Autònoma de Barcelona,.
<br><br>
Schabbach, T., Leibbrandt, P. (2014): Solarthermie: Wie Sonne zu Wärme wird. Berlin and Heidelberg: Springer Vieweg (Technik im Fokus Daten Fakten Hintergründe).
<br><br>
Schatzinger, S., Rose, H. (2012): „Hafencity Praixsleitfaden Elektromobilität“. Abgerufen 04.06.2020 von https://www.hafencity.com/upload/files/files/HafenCity_Praxisleitfaden_Elektromobilitaet.pdf.
<br><br>
Schaumann, G., Schmitz, K.W. (Hrsg.) (2010): Kraft-Wärme-Kopplung. 4., vollst. bearb. und erw. Aufl. Berlin: Springer (VDI-Buch).
<br><br>
Schinnerl, D., Bucar, G., Piller, S., Unger, F. (2007): AbwasserWärmeNutzung Leitfaden zur Projektentwicklung. Graz, Berlin: Grazer Energieagentur GmbH, Berliner Energieagentur GmbH.
<br><br>
Schipperskaai Development cvba (2017): „DE NIEUWE DOKKEN - The keys to Energy Neutrality in The New Docks in Ghent (B)“.
<br><br>
Schleswiger SW (2019): „Kalte Nahwärme – ökologisch, clever und hocheffizient“. Abgerufen 20.05.2020 von https://www.schleswiger-stadtwerke.de/content/produkte/schleswigerNAHWAERME/index.php.
<br><br>
Schneider, C. (2018): „Blockchain in der Energiewirtschaft“. Abgerufen 27.03.2020 von https://w3.windmesse.de/windenergie/news/27569-blockchain-energiewirtschaft-energie-gesetz.
<br><br>
Schopfer, Dürr (2019): „Quartier-Strom“. Abgerufen 26.03.2020 von https://quartier-strom.ch/index.php/das-wichtigste-in-kurze/.
<br><br>
Schramm, E., Oldenburg, M., Wuttke, M., Birzle-Harder, B., Hefter, T., Rohde, R. (2019): „Akzeptanz der Unterdrucktechnik in Wohngebäuden Teil 1: Wahrnehmung der Nutzenden und technische Hintergründe“. In: Korrespondenz Abwasser, Abfall (KA). 2019 (3), S. 180–186, doi: 10.3242/kae2019.03.001.
<br><br>
Schütze, M., Wriege-Bechtold, A., Zinati, T., Söbke, H., Wißmann, I., Schulz, M., Veser, S., Londong, J., Barjenbruch, M., Alex, J. (2019): „Simulation and visualization of material flows in sanitation systems for streamlined sustainability assessment“. In: Water Science and Technology. 79 (10), S. 1966–1976, doi: 10.2166/wst.2019.199.

ses (2015): „Energiewende im Keller: BHKW versorgt Quartier“. Abgerufen 08.10.2021 von https://www.ses-energiesysteme.com/uber-uns/aktuelles/energiewende-im-keller-bhkw-versorgt-quartier/.
<br><br>
SIB Sachsen (2010): „Standortunabhängige Studie zur Nutzung von Tiefengeothermie im Freistaat Sachsen“. Abgerufen 13.05.2020 von https://www.sib.sachsen.de/fileadmin/user_upload/PDF-Dokumente/Standortunabhaengige-Studie-zur-Nutzung-von-Tiefengeothermie-im-Freistaat-Sachsen.pdf.
<br><br>
Silke Thole (2017): „25 Prozent weniger Kosten durch variable Stromtarife“. Abgerufen 30.03.2020 von https://www.enbausa.de/lueftung/aktuelles/artikel/25-prozent-weniger-kosten-durch-variable-stromtarife-2513.html.
<br><br>
Skambraks, A.-K., Kjerstadius, H., Meier, M., Davidsson, Å., Wuttke, M., Giese, T. (2017): „Source separation sewage systems as a trend in urban wastewater management: Drivers for the implementation of pilot areas in Northern Europe“. In: Sustainable Cities and Society. 28 , S. 287–296, doi: 10.1016/j.scs.2016.09.013.
<br><br>
Solites (2020): „Steinbeis Forschungsinstitut für solare und zukunftsfähige thermische Energiesysteme“. Abgerufen 25.05.2020 von http://www.saisonalspeicher.de/Planung/Voraussetzungen/Kosten/tabid/87/Default.aspx.
<br><br>
Sommer, J. (2015): „Vergleichende Ökobilanzierung verschiedener Maßnahmen der Regenwasserbewirtschaftung“. Braunschweig: Technische Universität Braunschweig.
<br><br>
Stadtwerke Ludwigsburg (2019): „SWLB geht nachhaltig“. Abgerufen 29.04.2020 von https://www.swlb.de/nachhaltigkeit?ConsentReferrer=https%3A%2F%2Fwww.google.com%2F.
<br><br>
Steinmetz, H. (2016): „Phosphor-Rückgewinnung – Aktuelle Entwicklungen in Deutschland“. In: 2. Kongress: Phosphor - Ein kritischer Rohstoff mit Zukunft am 26. und 27. Oktober 2016 im Kursaal Stuttgart Bad Cannstatt. Bad Cannstatt.
<br><br>
Steinmetz, H., Minke, R., Morandi, C., Wasielewski, S., Mouarkech, K. (2017): Verbundprojekt TWIST++: Transitionswege WasserInfraStruktursysteme: Anpassung an neue Herausforderungen im städtischen und ländlichen Raum : Teilprojekt der Universität Stuttgart. (Fachlicher Schlussbericht) Stuttgart.
<br><br>
Sterner, M., Stadler, I. (2017): Energiespeicher - Bedarf, Technologien, Integration. Berlin, Heidelberg: Springer Berlin Heidelberg doi: 10.1007/978-3-662-48893-5.
<br><br>
Stober, I., Bucher, K. (2014): Geothermie. 2., [überarb. und aktualisierte] Aufl. Berlin and Heidelberg: Springer Spektrum (Lehrbuch), doi: 10.1007/978-3-642-41763-4.
<br><br>
Strohbach, M.W., Arnold, E., Haase, D. (2012): „The carbon footprint of urban green space - A life cycle approach“. In: Landscape and Urban Planning. Elsevier 104 (2), S. 220–229.
<br><br>
Sulzer, M., Hangartner, D. (2014): Grundlagen-/Thesen Kalte Fernwärme (Anergienetze) - Thesenpapier. Luzern: Hochschule Luzern.
<br><br>
Sulzer, M., Menti, U.-P., Hochschule Luzern (Hrsg.) (2015): „Multi-Energy-Grid: Möglichkeit der thermischen Vernetzung“. In: Aqua & Gas. 7 (8), S. 56–61.
<br><br>
Suurstoffi (2020): „Mission Zero-Zero“. Abgerufen 14.04.2020 von https://www.suurstoffi.ch/energiekonzept.
<br><br>
SW Augsburg (2020): „Power-to-Gas“. Abgerufen 15.04.2020 von https://www.sw-augsburg.de/power-to-gas/.
<br><br>
SW Neumuenster (2020): „Erklärung Power-to-Heat“. Abgerufen 14.05.2020 von https://www.stadtwerke-neumuenster.de/fileadmin/swn.net/media/unternehmen/presse/pressemeldungen/Erklaerung_Power-to-Heat_final.pdf.
<br><br>
Swantje Gährs, Evelin Wieckowski, Jonas von Braunmühl, Andreas Wolfmaier, Bernd Hirschl (2015): „Simulation von Prosumer Haushalten“. Abgerufen 06.05.2020 von https://www.prosumer-haushalte.de/data/prohaus/user_upload/IOEW_Arbeitspapier-AP3_Simulation-von-Prosumer-Haushalten_Final.pdf.
<br><br>
Tesla (2017): „Tesla Powerpack to Enable Large Scale Sustainable Energy to South Australia“. Abgerufen 31.01.2023 von https://www.tesla.com/blog/tesla-powerpack-enable-large-scale-sustainable-energy-south-australia.
<br><br>
Teuffer, M. (2020): „N-Ergie zieht positive Bilanz zu Wärmespeichern“. Abgerufen 11.06.2020 von https://www.energate-messenger.de/news/200463/n-ergie-zieht-positive-bilanz-zu-waermespeicher.
<br><br>
The Mobility House (2019): „mobilityhouse.com“. Abgerufen 20.03.2020 von https://www.mobilityhouse.com/de_de/magazin/emobility/v2gprojekte-tmh.html.
<br><br>
Tian, Y., Zhao, C.Y. (2013): „A review of solar collectors and thermal energy storage in solar thermal applications“. In: Applied Energy. 104 , S. 538–553, doi: 10.1016/j.apenergy.2012.11.051.
<br><br>
Toboso-Chavero, S., Madrid-López, C., Villalba, G., Gabarrell Durany, X., Hückstädt, A.B., Finkbeiner, M., Lehmann, A. (2021): „Environmental and social life cycle assessment of growing media for urban rooftop farming“. In: The International Journal of Life Cycle Assessment. Springer 26 (10), S. 2085–2102.
<br><br>
Töpler, J., Lehmann, J. (Hrsg.) (2013): Wasserstoff und Brennstoffzelle: Technologien und Marktperspektiven. Berlin, Heidelberg: Springer Berlin Heidelberg.
<br><br>
ub.de Fachwissen (2020): „Blockheizkraftwerk“. Abgerufen 08.10.2021 von https://www.blockheizkraftwerk.org/.
<br><br>
Umweltbundesamt (2020a): „Energieverbrauch privater Haushalte“. Abgerufen 23.07.2020 von https://www.umweltbundesamt.de/daten/private-haushalte-konsum/wohnen/energieverbrauch-privater-haushalte#hochster-anteil-am-energieverbrauch-zum-heizen.
<br><br>
Umweltbundesamt (2020b): „Wärmepumpen gewusst wie“. Abgerufen 26.02.2020 von https://www.umweltbundesamt.de/umwelttipps-fuer-den-alltag/heizen-bauen/waermepumpe#gewusst-wie.
<br><br>
Umweltbundesamt (2013): „Was ist ein Smart Grid?“. Abgerufen 17.04.2020 von https://www.umweltbundesamt.de/service/uba-fragen/was-ist-ein-smart-grid.
<br><br>
Urbane Energie (2016): „Financing Mieterstrom“. Abgerufen 18.06.2020 von https://www.pv-mieterstrom.de/wp-content/uploads/2016/11/PV_Financing_Mieterstrom.pdf.
<br><br>
Urbansky, F. (2016): „Erneuerbare Energien sind die Zukunft der Wärmenetze“. Abgerufen 18.11.2019 von https://www.enwipo.de/2016/03/01/waermenetze-nur-bei-sehr-hoher-anschlussdichte-wirtschaftlich/.
<br><br>
URIMAT Deutschland AG (o. J.): „URIMAT Montageservice“. Abgerufen 22.03.2021 von https://www.urimat.shop/wasserlose-urinale/Desinfektionsmittelspender-42-52-55-56-57-58-61-63-66.html.
<br><br>
Vaillant (2020): „Elektro-Speicherheizgeräte eloMENT VSU EL und VSF EL“. Abgerufen 07.05.2020 von https://www.vaillant.de/heizung/produkte/elektro-speicherheizgerate-eloment-vsu-el-und-vsf-el-125568.html.
<br><br>
Vaneeckhaute, C., Lebuf, V., Michels, E., Belia, E., Vanrolleghem, P.A., Tack, F.M.G., Meers, E. (2017): „Nutrient Recovery from Digestate: Systematic Technology Review and Product Classification“. In: Waste and Biomass Valorization. 8 (1), S. 21–40, doi: 10.1007/s12649-016-9642-x.
<br><br>
Vattenfall (2018): „Elektrodenkessel Power-to-Heat“. Abgerufen 07.05.2020 von https://group.vattenfall.com/de/newsroom/blog-news-presse/news/2018/juni/elektrodenkessel-power-to-heat.
<br><br>
VDE (2020): „Technischer Leitfaden Ladeinfrastruktur“. Abgerufen 28.05.2020 von https://www.vde.com/resource/blob/988408/a2b8e484994d628b515b56376f809e28/technischer-leitfaden-ladeinfrastruktur-elektromobilitaet---version-3-data.pdf.
<br><br>
Verbraucherzentrale (2020): „Smart Meter: Die neuen Stromzähler kommen“. Abgerufen 20.04.2020 von https://www.verbraucherzentrale.de/wissen/energie/preise-tarife-anbieterwechsel/smart-meter-die-neuen-stromzaehler-kommen-13275.
<br><br>
<br><br>
Verbraucherzentrale NRW (2020): „Energie 2020 - Batteriespeicher“. Abgerufen 06.01.2020 von https://www.energie2020.nrw/sites/default/files/2019-09/F%C3%B6rderprodukt_progres.nrw_Batteriespeicher.pdf.
<br><br>
Verbraucherzentrale NRW (2017): „Kleinwindkraftanlagen: Das sollten Sie wissen“. Abgerufen 17.05.2020 von https://www.verbraucherzentrale.de/wissen/energie/erneuerbare-energien/kleine-windenergieanlagen-stromerzeugung-in-eigener-hand-10857.
<br><br>
Verbraucherzentrale NRW (2019): „Solaranlage planen, Batteriespeicher“. Abgerufen 06.01.2019 von https://www.verbraucherzentrale.nrw/sites/default/files/2019-04/201904_Solaranlage-planen-kaufen_Batteriespeicher_Brosch%C3%BCre_VZ-NRW.pdf.
<br><br>
Veser, S., Londong, J. (2017): EVaSENS - Einsatz von Vakuum-Inlinern im Bestand: Integration von Unterdruck-Sanitärtechnik im bestehenden Gebäude zur Etablierung von NASS-Systemen. Stuttgart: Fraunhofer IRB Verlag (Forschungsinitiative ZukunftBau).
<br><br>
Veser, S., Londong, J., Kraft, E., Hansen, J. (2015): Doppel-Inliner-Verfahren zur getrennten Erfassung von Schwarz- und Grauwasser im Gebäudebestand. Berlin: epubli GmbH.
<br><br>
VKU (2018): „Vom Mieterstrom zur Quartiersversorgung“. Abgerufen von https://www.vku.de/publikationen/2018/neue-broschuere-vom-mieterstrom-zur-quartiersversorgung-erschienen/.
<br><br>
Vonovia (2020): „Innovationsquartier Bochum Weitmar“. Abgerufen 16.03.2020 von https://www.vonovia.de/de-de/ueber-vonovia/presse/pressemitteilungen/200123-innovationsquartier-bochum-weitmar.
<br><br>
Vuna GmbH (2021a): Faktenblatt Kunden.
<br><br>
Vuna GmbH (2021b): VunaNexus.
<br><br>
Wagner, A. (2015): Photovoltaik Engineering: Handbuch für Planung, Entwicklung und Anwendung. 4. Auflage. Heidelberg and Dordrecht and London and New York: Springer Vieweg (VDI-Buch), doi: 10.1007/978-3-662-48640-5.
<br><br>
Walker-Hertkorn, S. (2017): „Geothermieprojekte rund um den Henniger Turm in Frankfurt am Main“. Abgerufen 08.10.2021 von https://www.tsb-energie.de/fileadmin/Redakteure/Veranstaltungen/Gebaeudeenergie/2017/Vortraege/Fr._Prof._Walker-Hertkorn__WZS_Straubing_-_2._Beitrag.pdf.
<br><br>
Walther, K. (2021): „Klimaneutrales Stadtquartier Neue Weststadt“. Abgerufen 08.10.2021 von https://www.esslingen.de/start/es_themen/eswestp2g2p.html.
<br><br>
Wanner, O. (2009): „Wärmerückgewinnung aus Abwasser“. In: Schriftenreihe der Eawag. 19 .
<br><br>
Wärmepumpe-Regional (2020): „Stadtgärten am Henninger Turm heizen mit Solar- und Erdwärme“. Abgerufen 08.10.2021 von https://www.waermepumpe-regional.de/frankfurt-am-main/stadtgaerten-am-henninger-turm-heizen-mit-solar-und-erdwaerme.
<br><br>
Wasielewski, S., Gottardo Morandi, C., Mouarkech, K., Minke, R., Steinmetz, H. (2017): „Impacts of blackwater co-digestion on biogas production in the municipal wastewater treatment sector using pilot-scale UASB and CSTR reactors“. In: DESALINATION AND WATER TREATMENT. 91 , S. 121–128, doi: 10.5004/dwt.2017.21236.
<br><br>
Weinhold, Weber, Ullrich (2018): „Auto liefert Strom“. Abgerufen 20.03.2020 von https://www.erneuerbareenergien.de/archiv/wenn-das-auto-strom-liefert-150-437-107142.html.
<br><br>
Wendland, C., Deegener, S., Behrendt, J., Toshev, P., Otterpohl, R. (2007): „Anaerobic digestion of blackwater from vacuum toilets and kitchen refuse in a continuous stirred tank reactor (CSTR)“. In: Water Science and Technology. 55 (7), S. 187–194, doi: 10.2166/wst.2007.144.
<br><br>
Wesselak, V., Schabbach, T., Fischer, J., Link, T. (2017): Handbuch Regenerative Energietechnik. 3. Auflage. Berlin and Heidelberg: Springer Vieweg doi: 10.1007/978-3-662-53073-3.
<br><br>
Wesselak, V., Voswinckel, S. (2016): Photovoltaik: Wie Sonne zu Strom wird. 2. Auflage. Berlin and Heidelberg: Springer (Technik im Fokus).
<br><br>
Wiemann, M. (2020): „Energy-Web-Foundation“. Abgerufen 25.03.2020 von https://www.energiewirtschaft-blockchain.de/projekte/energy-web-foundation-blockchain/.
<br><br>
Willing, S. (2020): „innogy.com“. Abgerufen 20.04.2020 von https://iam.innogy.com/ueber-innogy/innogy-innovation-technik/smart-grids/smart-operator.
<br><br>
Winkelmann, Klima (2015): „Demand Response Maßnahmen“. Abgerufen 27.04.2020 von http://www.wi2015.uni-osnabrueck.de/Files/WI2015-D-14-00324.pdf.
<br><br>
Winner (2020): „Winner Projekt“. Abgerufen 19.03.2020 von https://www.winner-projekt.de/.
<br><br>
Wirth, H., Fraunhofer ISE (2021): „Aktuelle Fakten zur Photovoltaik in Deutschland“. Abgerufen 08.10.2021 von https://www.ise.fraunhofer.de/content/dam/ise/de/documents/publications/studies/aktuelle-fakten-zur-photovoltaik-in-deutschland.pdf.
<br><br>
Wriege-Bechtold, A. (2015): „Anaerobe Behandlung von Braunwasser und Klärschlamm unter Berücksichtigung von Co-Substraten“. (Dissertation) Berlin.
<br><br>
WSWU, Umwelt (WSWU), W.S.W. und (Hrsg.) (2015): Neuartige Sanitärsysteme: Begriffe, Stoffströme, Behandlung von Schwarz-, Braun-, Gelb-, Grau-, und Regenwasser, Stoffliche Nutzung. 2. Aufl. Kromsdorf: Bauhaus-Universitätsverlag als Imprint von VDG Weimar.
<br><br>
Zandee et. al. (2011): Low-cost Struvite Reactor Construction Manual. Eawag, UN-HABITAT.
<br><br>
Zapf, M. (2017): Stromspeicher und Power-to-Gas im deutschen Energiesystem: Rahmenbedingungen, Bedarf und Einsatzmöglichkeiten. Wiesbaden: Springer Fachmedien Wiesbaden.
<br><br>
Zeeman, G., Kujawa-Roeleveld, K. (2013): „Anaerobic treatment of sourceseparated domestic wastewater“. In: Source Separation and Decentralization for Wastewater Management. London: IWA Publishing.
<br><br>
Zeeman, G., Lettinga, G. (1999): „The role of anaerobic digestion of domestic sewage in closing the water and nutrient cycle at community level“. In: Water Science and Technology. 39 (5), doi: 10.1016/S0273-1223(99)00101-8.
<br><br>
Zirkelbach, D. (2017): „Green roofs− hygrothermal simulation of moisture and energy performance“. In: Proceedings of the 1st International Conference on Construction Materials for Sustainable Future. Zadar, Kroatien S. 810–815.
<br><br>
Zoerner, T., Kassebaum, M., Schwarzbeck, F. (2020): Energierevolution getrieben durch Blockchain. Berlin: Begleitforschung Smart Service Welt II.
<br><br>
ZVDH (2016): Regeln für Abdichtungen - Flachdachrichtlinie. 9. Aufl. Köln.



					</p>


				</div>
			</div>
			<?php include 'footer.php'; ?>
			
		</div>
		
	</body>
</html>
