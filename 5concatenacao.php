<!DOCTYPE html>
<html>
<head>
<title>Exemplo 5</title>
</head>

<body>
<?php 

echo "concatenação </br>";

$nome = 'Marta Amorim';
//Não imprime o conteudo da variavel com aspas simples
echo 'Menu nome é $nome e minha idade é 1.';
echo "<br>";
echo "Menu nome é $nome e minha idade é 1.";



echo "<br>";
echo "Menu nome é " . $nome . " e minha idade é 2.";
echo "<br>";
echo "Menu nome é " , $nome , " e minha idade é 3.";
echo "<br>";
echo 'Menu nome é ' .$nome. ' e minha idade é 4. ' , $nome , " OK!";
echo "<br>";

echo "Menu nome é $nome e minha idade é \"5\".";
echo "<br>";
echo 'Menu nome é ' .$nome. ' e minha idade é \'6\'.';
echo "<br></br>";



$texto = "A cor é %s";
$replace  = "red </br> </br>";
$result = sprintf($texto, $replace);
echo sprintf($texto, $replace);

$unit_cup = "copo";
$qtd = "3";
echo "Arroz - {$qtd} {$unit_cup}s </br>";


//read: https://www.experts-exchange.com/articles/12241/Quotation-Marks-in-PHP.html
//https://dev.to/morinoko/double-quotes-vs-single-quotes-in-php-2e5n
?>
</body>

</html>

