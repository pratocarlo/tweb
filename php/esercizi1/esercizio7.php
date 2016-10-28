<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="esercizio7.css">
	<title></title>
</head>
<body>
<?php
	echo "<table cellspacing=0>";
	for ($i=1; $i <= 7; $i++) { 
		echo "<tr>";
		for ($a=1; $a <= 7; $a++) { 
			$c=$a*$i;
			echo "<td>$c</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>
</body>
</html>