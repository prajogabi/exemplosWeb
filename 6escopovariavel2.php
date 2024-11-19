<!DOCTYPE html>
<html>
<head>
<title>Exemplo 6</title>
</head>

<body>
<?php
//ESCOPO GLOBAL
 $x = 7; 
 
 
function Imprime() {
	
	echo "<p>Variável global dentro da função:". $GLOBALS['x'] ."</p>"; 
} 
Imprime();


echo "<p>Variável global x fora da função: $x</p>";
?>
</body>

</html>