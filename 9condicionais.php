<!DOCTYPE html>
<html>
<body>

<?php

$numero=10;

if($numero == 10):
	echo "É igual a 10";
endif;

echo "<br>";
echo "<br>";


if ($numero == 10) {
   echo "É igual a 10 - outra condicao";
}

echo "<br>";
echo "<br>";

$numero=15;
if($numero == 10):
	echo "É igual a 10";
else:
	echo "É diferente de 10";
endif;

echo "<br>";
echo "<br>";

if ($numero == 10) {
   echo "É igual a 10 - outra condicao - B";
} else {
    echo "É diferente de 10 - B";
}



echo "<br>";
echo "<br>";

//$numero=8;
$numero=50;
if($numero == 10):
	echo "É igual a 10";
elseif($numero <=9):
	echo "É menor igual a 9";
else:
	echo "É maior que 10";
endif;

echo "<br>";
echo "<br>";


if ($numero == 10) {
   echo "É igual a 10 - outra condicao - C";
}elseif ($numero <=9) {
    echo "É menor igual a 9 - C";
} else {
    echo "É diferente de 10 - C";
}

echo "<br>";
echo "<br>";

$cor="verde";
switch($cor):
	case "vermelho":
	echo "Sua cor preferida é o vermelho";
	break;
	
	case "verde":
	echo "Sua cor preferida é o verde";
	break;
	
	case "azul":
	echo "Sua cor preferida é o azul";
	break;
	
	default:
	echo "Sua cor preferida não é o vermelho, azul e verde";
	
endswitch;	


?> 

</body>
</html>

