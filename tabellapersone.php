<html class="no-js" lang="it">
<head>
	<meta charset="utf-8">
	
	<title>Tabella Persone</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="css/style.css" rel="stylesheet" type="text/css">	
</head>
<body>
	<?php
		$miofile = file("txtfiles/testo.txt");
		print_r($mio_file);
		for( $i=0; $i<count($miofile); $i++ ){
			$miofile[$i] = explode(";;", $miofile[$i]);
		}
		echo "<br/><br/>";
		print_r($mio_file);
		
		echo "<table>";
			for( $i=0; $i<count($miofile); $i++ ){
				echo "
					<tr>
						<td>".$miofile[$i][0]."</td>
						<td>".$miofile[$i][1]."</td>
						<td>".$miofile[$i][2]."</td>
						<td>".$miofile[$i][3]."</td>
						<td>".$miofile[$i][4]."</td>						
					</tr>				
				";
			}
		echo "</table>";
		
	?>
</body>
</html>