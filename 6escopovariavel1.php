<!DOCTYPE html>
<html>
<head>
<title>Exemplo 6</title>
</head>

<body>
<?php



function Imprime() {
	 //variavel com escopo local
     $x = 7; 
     echo "<p>Variável local x dentro da função: $x</p>";
	 echo "<br>";	
} 

//chamada da função
Imprime();

//irá produzir um erro
echo "<p>Variável global x dentro da função: $x</p>";
?>
</body>

</html>