<html class="no-js" lang="it">
<head>
	<meta charset="utf-8">
	
	<title>PROVA N. 1 PHP</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/php.css" rel="stylesheet" type="text/css">	
</head>
<body>
	
	<?php
		
		echo "PROVA!!";
		$pippo = "ciao";
		echo "<br/>";
		echo $pippo;
		
		$titolo1 = "il mio primo titolo";
		$titolo2 = "il mio secondo titolo";
		$titolo3 = "il mio terzo titolo";
		$titolo4 = "il mio quarto titolo";
		$titolo5 = "il mio quinto titolo";
		
		$color1 = "#4286f4";
		$color2 = "#3270a2";
		$color3 = "#22aafb";
		$color4 = "#12bbf5";
		$color5 = "#ff0000";
		
		$color1_bis = " style=\"color:#000000\" ";
		$color2_bis = " style=\"color:#00ffa2\" ";
		$color3_bis = " style=\"color:#00aaff\" ";
		$color4_bis = " style=\"color:#ff11f5\" ";
		$color5_bis = " style=\"color:#121944\" ";
		

		/*DEFINIZIONE DI VARIABILE NUMERICA*/
		$pluto = 5;
		$pluto_sum = 10+5; /*Stampa direttamente il risultato*/
		$var = 10;
		$var2 = 5;
		$tot = $var + $var2;
		
		$counter=1;
		
		$counter2=1;
		
		$counter3=1;

	?>
	
	<h1 style="color:<?php echo $color1;?>"> <?php echo $titolo1; ?> </h1>
	<h2 style="color:<?php echo $color2;?>"> <?php echo $titolo2; ?> </h2>
	<h3 style="color:<?php echo $color3;?>"> <?php echo $titolo3; ?> </h3>
	<h4 style="color:<?php echo $color4;?>"> <?php echo $titolo4; ?> </h4>
	<h5 style="color:<?php echo $color5;?>"> <?php echo $titolo5; ?> </h5>
	
	<h1 <?php echo $color1_bis; ?> > <?php echo $tot; ?> </h1>
	<h1 <?php echo $color2_bis; ?> > <?php echo $tot; ?> </h1>
	<h1 <?php echo $color3_bis; ?> > <?php echo $tot; ?> </h1>
	<h1 <?php echo $color4_bis; ?> > <?php echo $tot; ?> </h1>
	<h1 <?php echo $color5_bis; ?> > <?php echo $tot; ?> </h1>	
	
	<h<?php echo $counter; ?> > <?php echo $titolo1; ?> </h1>
	<h<?php echo $counter++; ?> > <?php echo $titolo2; ?> </h2>
	<h<?php echo $counter++; ?> <?php echo $color2_bis; ?> > <?php echo $titolo3; ?> </h3> <!-- INSERISCO DUE PHP DISTINTI DENTRO LO STESSO TAG -->
	<h<?php echo $counter++; ?> > <?php echo $titolo4; ?> </h4>
	<h<?php echo $counter++; ?> > <?php echo $titolo5; ?> </h5>
	
	<h<?php echo $counter2; ?> > <?php echo $titolo1; ?> </h1>
	<h<?php echo $counter2+=1; ?> > <?php echo $titolo2; ?> </h2>
	<h<?php echo $counter2+=1; ?> > <?php echo $titolo3; ?> </h3>
	<h<?php echo $counter2+=1; ?> > <?php echo $titolo4; ?> </h4>
	<h<?php echo $counter2+=1; ?> > <?php echo $titolo5; ?> </h5>
	
	<h<?php echo $counter3; ?> > <?php echo $titolo1; ?> </h1>
	<h<?php echo $counter3 = $counter3 + 1; ?> > <?php echo $titolo2; ?> </h2>
	<h<?php echo $counter3 = $counter3 + 1; ?> > <?php echo $titolo3; ?> </h3>
	<h<?php echo $counter3 = $counter3 + 1; ?> > <?php echo $titolo4; ?> </h4>
	<h<?php echo $counter3 = $counter3 + 1; ?> > <?php echo $titolo5; ?> </h5>
	
	<?php echo "ciao "."pippo"; ?>
	
	<?php
		echo "<br/><br/>";
		
	
		
		for($i=1 ; $i<=6; $i++){
			echo "<h".$i." ".$color3_bis."> il mio titolo in h".$i."</h".$i.">";
		}
		
		echo "<br/><br/>";
	?>
	
	<div class="animalContainer">

		<h1>ANIMALI</h1>
		
		<?php
			echo "<br/><br/>";
			
			for($i=1 ; $i<=10; $i++){
				echo "<a href=\"img2\\".$i.".jpeg\"> <img src=\"img2\\".$i.".jpeg\" width = \"640px\" height = \"480px\" alt = \"immagine ".$i."\"> </a>";
			}
			
			echo "<br/><br/>";
		?>
	</div>
	

	
	<?php
			echo "<br/><br/>";
			echo "<br/><br/>";
	
	
		/*DEFINIZIONE ARRAY IN PHP*/
			$num_array = array();
			$num_array[0] = "Ciao ";
			$num_array[1] = "sono ";
			$num_array[2] = "un ";
			$num_array[3] = "array ";
			$num_array[4] = "di ";
			$num_array[5] = 15;
			$num_array[6] = " elementi";
			$num_array[7] = ". ";
			$num_array[8] = "Per ";
			$num_array[9] = "leggermi ";
			$num_array[10] = "hai ";
			$num_array[11] = "usato ";
			$num_array[12] = "un ";
			$num_array[13] = "ciclo ";
			$num_array[14] = "for.";

		/*LETTURA ELEMENTI DI ARRAY MOD 1*/
			for($i = 0; $i < 15 ; $i++){
				echo $num_array[$i];
			}
			
			echo "<br/><br/>";
			echo "<br/><br/>";

		/*LETTURA ELEMENTI DI ARRAY MOD 2*/			
			for($i = 0; $i < count($num_array) ; $i++){
				echo $num_array[$i];
			}
			
			echo "<br/><br/>";
			echo "<br/><br/>";

		/*$final_index = count($num_array);
			echo $final_index;
			
		$num_array[$final_index] = "pippo";
		echo $num_array[$final_index];*/
		
		$num_array[count($num_array)] = "pippo";
		echo $num_array[count($num_array)];
		
		mkdir("php-prova"); /*FUNZIONE CREA CARTELLA*/
		touch("php/inizio-prova.php"); /*FUNZIONE CREA FILE*/
		copy("php/inizio-prova.php", "php-prova/inizio-prova.php"); /*FUNZIONE DI COPIATURA FILE*/
		unlink("php/inizio.php"); /*FUNZIONE PER LA CANCELLAZIONE DI UN FILE. POSSO CANCELLARE UNA CARTELLA, MA DEVE ESSERE VUOTA*/
		unlink("php/inizio-prova.php");
		unlink("php");	

		$stream = fopen("testo3.txt", "w+"); /*STREAM DEL FILE IN APERTURA*/
		fwrite($stream, "Ciao a tutti sono il testo numero 3!"); /*SCRITTURA FILE*/
		/*fclose($stream);*/ /*CHIUDE IL FLUSSO DEL FILE APPENA APERTO IN SCRITTURA. IN PHP NON E'OBBLIGATORIO*/
		
		echo "<br/><br/>";
		echo "<br/><br/>";

		/*Array ASSOCIATIVI*/
		
		$pippo = array();
		$pippo["nome"] = "Nicola";      /*"nome", come cognome ed email sono dette ETICHETTE dell'ARRAY ASSOCIATIVO ed equivalgono agli indici interi degli array definiti in modo 	classico*/
		$pippo["cognome"] = "Bombonati";
		$pippo["email"] = "bombonati.nicola@gmail.com";
		print_r($pippo);

		echo "<br/><br/>";
		echo "<br/><br/>";

		foreach($pippo as $chiave => $valore){
			echo $chiave.": ".$valore."<br/>" ;
		}

		echo "<br/><br/>";
		echo "<br/><br/>";
		
		$p = array();
		$p[]=1; $p[]="ciao"; $p[]="pluto";
		foreach($p as $chiave => $valore)
			{ echo $chiave.": ".$valore."<br/>" ; }
	?>
	
</body>
</html>