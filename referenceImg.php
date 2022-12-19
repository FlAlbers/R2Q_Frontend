<?php 
	require_once 'sql.php';
	
	$post_set = $_POST?1:0;
	// $file_to_read = fopen('Bildverweise_Test.CSV', 'r');
	// $bildref = fgetcsv($file_to_read, NULL, ";" )

	function csv_to_multidimension_array($filename='', $delimiter=',')
	{
		if(!file_exists($filename) || !is_readable($filename)) {
			return false;
		}
	
		$header = NULL;
		$data = array();
	
		if (($handle = fopen($filename, 'r')) !== false) {
			while (($row = fgetcsv($handle, 1000, $delimiter)) !== false ) {
				$data[] = $row;
			}
			fclose($handle);
		}
		return $data;
	}


	function get2DArrayFromCsv($file, $delimiter) {
		if (($handle = fopen($file, "r+")) !== FALSE) {
			$i = 0;
			$data2DArray = array();
			while (($lineArray = fgetcsv($handle, 0, $delimiter)) !== FALSE) {
				for ($j = 0; $j < count($lineArray); $j++) {
					$data2DArray[$i][$j] = $lineArray[$j];
				}
				$i++;
			}
			fclose($handle);
		}
		return $data2DArray;
	}

	$bildref = csv_to_multidimension_array('Bildverweise_Test.CSV',';')

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
				<div class = "filters">
					<?php
						include 'filters.php';
					?>
				</div>
				<div class = "refContent">
					<h3  style = "width: 1000px; text-align: justify;"> Bildverweise  </h3>
					<table class="refTable" style="border-top: 2px solid black" >
						<colgroup>
							<col style='width:45%'>
							<col style='width:55%'>
						</colgroup>
						<thead class='search'>
							<td style='font-size: 25px;' >Bild &nbsp;</td>
							<td style='font-size: 25px;' >Quelle &nbsp;</td>
						</thead>
						<tbody>
							<tr class="refRow">
								<td style="padding: 3px 5px">Hintergrundbild Startseite</td>
								<td style="padding: 3px 5px">CHUTTERSNAP, 04.09.2017, <a href="https://unsplash.com/photos/oqJxJ4TYoQg"> https://unsplash.com/photos/oqJxJ4TYoQg</a> </td>
							</tr>
							<tr class="refRow">
								<td style="padding: 3px 5px">Hintergrundbild Maßnahmenkatalog</td>
								<td style="padding: 3px 5px">Danist Soh, 05.01.2016, <a href="https://unsplash.com/photos/dqXiw7nCb9Q"> https://unsplash.com/photos/dqXiw7nCb9Q</a> </td>
							</tr>

							<?php
								
								for ($i=1; $i < count($bildref); $i++) { 
									if ($bildref[$i][3] != "") {
										echo "<tr class='refRow'>
										<td style='padding: 3px 5px'>" . $bildref[$i][0] . $bildref[$i][1] . "&nbsp; " . $bildref[$i][2] . " Abb. 1</td>
										<td style='padding: 3px 5px'>" . $bildref[$i][3] . "</td>
										</tr>";
									}


									if ($bildref[$i][4] != "") {
										echo "<tr class='refRow'>
										<td style='padding: 3px 5px'>" . $bildref[$i][0] . $bildref[$i][1] . "&nbsp; " . $bildref[$i][2] . " Abb. 2</td>
										<td style='padding: 3px 5px'>" . $bildref[$i][4] . "</td>
										</tr>";
									}
									
								}
							?>
							

							<!-- <tr class="searchrow">
								<td></td>
								<td></td>
								<td></td> -->
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<?php include 'footer.php'; ?>
			
		</div>
		
	</body>
</html>
