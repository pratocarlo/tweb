<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	echo date("F, time");
	echo "<br>";
	$a = "August";
	if (date('F',time()) == $a)
		echo "Gesù";
	else
		echo "diocane";
?>
</body>
</html>