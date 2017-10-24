<html class="no-js" lang="it">
<head>
	<meta charset="utf-8">
	
	<title>COMUNI D'ITALIA</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="css/comuni.css" rel="stylesheet" type="text/css">	
</head>
<body>
	<?php
		$miofile = file("txtfiles/listacomuni.txt");
		print_r($mio_file);
		for( $i=0; $i<count($miofile); $i++ ){
			$miofile[$i] = explode(";", $miofile[$i]);
		}
		echo "<br/><br/>";
		print_r($mio_file);
		
		echo "<table class=\"comuni\">";
			echo "
				<tr class=\"header\">
					<td>".$miofile[0][1]."</td>
					<td>".$miofile[0][2]."</td>
					<td>".$miofile[0][3]."</td>
					<td>".$miofile[0][7]."</td>					
				</tr>
			";
			for( $i=1; $i<count($miofile); $i++ ){
				echo "
					<tr class=\"rigaComune\">
						<td>".$miofile[$i][1]."</td>
						<td>".$miofile[$i][2]."</td>
						<td>".$miofile[$i][3]."</td>
						<td>".$miofile[$i][7]."</td>					
					</tr>				
				";
			}
		echo "</table>";
		
	?>
</body>
</html>