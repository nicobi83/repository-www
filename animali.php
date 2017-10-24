<html class="no-js" lang="it">
<head>
	<meta charset="utf-8">
	
	<title>ANIMALI</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="css/animali.css" rel="stylesheet" type="text/css">	
</head>
<body>
		<?php			
		echo "<table class=\"container\">";
			for($i=1 ; $i<=6; $i++){

					echo "<tr>";
						echo "<td class=\"column1\">";
							echo "<div class=\"imageContainer\">";
							echo "<img src=\"img2\\".$i.".jpeg\" width = \"150px\" height = \"80px\" alt = \"immagine ".$i."\">";
							echo "</div>";
						echo "</td>";
						
						echo "<td class=\"column2\">";	
							echo "<p class=\"photoName\">";
								echo $i.".jpeg";
							echo "</p>";
						echo "</td>";
						
						echo "<td class=\"column2Bis\">";	
							echo "<p class=\"photoName\">";
								echo (filesize("img2\\".$i.".jpeg")/1024)." KByte";
							echo "</p>";
						echo "</td>";
						
						$pixel = getimagesize("img2\\".$i.".jpeg");
						echo "<td class=\"column2Tris\">";	
							echo "<p class=\"photoName\">";
								echo $pixel[0]." x ".$pixel[1];
							echo "</p>";
						echo "</td>";
						
						echo "<td class=\"column3\">";	
							echo "<a href=\"img2\\".$i.".jpeg\" class=\"link\">Visualizza</a>";
						echo "</td>";
					echo "</tr>";
				}
		echo "</table>";			
			
		echo "<br/><br/>";
		echo "<br/><br/>";			

		echo "<table class=\"container\">";			
			for($i=1 ; file_exists("img2\\".$i.".jpeg"); $i++){

					echo "<tr>";
						echo "<td class=\"column1\">";
							echo "<div class=\"imageContainer\">";
							echo "<img src=\"img2\\".$i.".jpeg\" width = \"150px\" height = \"80px\" alt = \"immagine ".$i."\">";
							echo "</div>";
						echo "</td>";
						
						echo "<td class=\"column2\">";	
							echo "<p class=\"photoName\">";
								echo $i.".jpeg";
							echo "</p>";
						echo "</td>";
						
						echo "<td class=\"column2Bis\">";	
							echo "<p class=\"photoName\">";
								echo (filesize("img2\\".$i.".jpeg")/1024)." KByte";
							echo "</p>";
						echo "</td>";
						
						$pixel = getimagesize("img2\\".$i.".jpeg");
						echo "<td class=\"column2Tris\">";	
							echo "<p class=\"photoName\">";
								echo $pixel[0]." x ".$pixel[1];
							echo "</p>";
						echo "</td>";						
						
						echo "<td class=\"column3\">";	
							echo "<a href=\"img2\\".$i.".jpeg\" class=\"link\">Visualizza</a>";
						echo "</td>";
					echo "</tr>";
				}			
			
			echo "</table>";
			echo "<br/><br/>";

			
				/*echo "<a href=\"img2\\".$i.".jpeg\"> <img src=\"img2\\".$i.".jpeg\" width = \"640px\" height = \"480px\" alt = \"immagine ".$i."\"> </a>";*/			
		?>
</body>
</html>

