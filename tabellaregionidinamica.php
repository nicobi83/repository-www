<html>
<head>
	<title>Tabella comuni</title>
	<style></style>
	
</head>
	<body style="border:10px;">

	
	<div style="display:line; background-color:#e0e0e0; border: 1px solid gray; width:1200px; padding:0px;">
	
	<span style="text-align:center;"><a href="tabellaregionidinamica.php"><h3>Torna alla pagina principale</h3></a></span>
	
	<?php
		
	$comuni=file("listacomuni.txt");
	echo "<br/><br/><table>";
	
	if(isset($_GET["regione"]))
	  $reg=$_GET["regione"];
	else
		$reg="";
	
	echo "<tr>
				<td class=\"table\">Comune</td>
				<td class=\"table\">Provincia</td>
				<td class=\"table\">Regione</td>
				<td class=\"table\">Abitanti</td>";
	
	for ($idx=1; $idx<count($comuni) ; $idx++)
	{
		$comuni[$idx] = explode(";",$comuni[$idx]);
				
		/* echo "uno è ".$comuni[$idx][3].". e l altro è ".$reg.".</br>";*/
		if(!isset($_GET["regione"]))
		{
			echo "<tr>
				<td class=\"table\">".$comuni[$idx][1]."</td>
				<td class=\"table\">".$comuni[$idx][2]."</td>
				<td class=\"table\"><a href=\"tabellaregionidinamica.php?regione=".$comuni[$idx][3]."\">".$comuni[$idx][3]."</a></td>
				<td class=\"table\">".$comuni[$idx][7]."</td>";
		}
		if($comuni[$idx][3]==$reg && isset($_GET["regione"]))
		{
			
			echo "<tr>
				<td class=\"table\">".$comuni[$idx][1]."</td>
				<td class=\"table\">".$comuni[$idx][2]."</td>
				<td class=\"table\"><a href=\"tabellaregionidinamica.php?regione=".$comuni[$idx][3]."\">".$comuni[$idx][3]."</a></td>
				<td class=\"table\">".$comuni[$idx][7]."</td>";
		}
	}
	echo "</table><br/><br/>";
	
	?>
	
	
	</body>
</html>
