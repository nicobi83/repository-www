<html class="no-js" lang="it">
<head>
	<meta charset="utf-8">
	
	<title>ARRAY 20</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/php.css" rel="stylesheet" type="text/css">	
</head>

<body>

	<?php
				/*DEFINIZIONE ARRAY IN PHP*/
				$num_array = array();
				$num_array[0] = "Ciao, ";
				$num_array[1] = "sono ";
				$num_array[2] = "un ";
				$num_array[3] = "array ";
				$num_array[4] = "di ";
				$num_array[5] = 20;
				$num_array[6] = " elementi";
				$num_array[7] = ". ";
				$num_array[8] = "Per ";
				$num_array[9] = "leggermi ";
				$num_array[10] = "hai ";
				$num_array[11] = "usato ";
				$num_array[12] = "un ";
				$num_array[13] = "ciclo ";
				$num_array[14] = "for.";
				$num_array[15] = "Devi ";
				$num_array[16] = "verificare ";
				$num_array[17] = "se ho piu' o meno di ";
				$num_array[18] = "10 ";
				$num_array[19] = "caratteri. ";	
				
				$arr_length = count($num_array);

				for( $i=0; $i<$arr_length; $i++  ){				
					if( strlen($num_array[$i]) > 10 ){
						echo strtoupper($num_array[$i]);
					} else {
						echo strtolower($num_array[$i]);
					}
					echo "<br />";
				}
	?> 

</body>