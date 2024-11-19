<!DOCTYPE html>
<html>
<head>
<title>Exemplo 2</title>
</head>

<body>
<?php 

echo "variável </br>";

$nome = "Marta";
$nome1 = 'Marta1';
$idade = 50;
$altura = 1.70;
$x = true;
$y = false;


echo "Ola meu nome é $nome1 minha idade $idade, minha altura $altura </br>";

echo  var_dump($altura) . "</br>";
echo  var_dump($nome ). "</br>";
echo  var_dump($idade ). "</br>";
echo  var_dump($nome1 ). "</br>";
echo  var_dump($x ). "</br>";


var_dump($altura,$nome)
?>
</body>

</html>