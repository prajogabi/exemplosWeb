<!DOCTYPE html>
<html>
<head>
<title>Exemplo 6</title>
</head>

<body>
<?php
//ESCOPO GLOBAL
$x = 5; 
 
function myTest() {	
    //a palavra chave global é usada para acessar variável global dentro da função.
	global $x;
   // irá produzir um erro SE A LINHA global for comentada
    echo "<p>Variável  x dentro da função: $x</p>";
} 


myTest();

echo "<p>Variável global x: $x</p>";
?>
</body>

</html>