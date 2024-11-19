<!DOCTYPE html>
<html>
<body>

<?php
define("BEMVINDO", "Bem Vindo ao Website!");
echo BEMVINDO;


echo "<br>";
//A constante é case-Sensitive e de escopo global
define("BEMVINDO1", "Bem Vindo ao carrinho de compras");
echo BEMVINDO1;

echo "<br>";

function myTest() {

  echo BEMVINDO1;

}

myTest();

?> 

</body>
</html>

