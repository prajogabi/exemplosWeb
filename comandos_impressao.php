<!DOCTYPE html>
<html>
<head>
<title>Exemplo comandos de impressao</title>
</head>

<body>
<?php 

/***************
ECHO
****************/
//Exemplo comando echo com 1 única entrada
echo "<h1>Eu sou a Marta </br></h1>";
//Exemplo comando echo com 2 entradas
echo "Eu sou a Marta ", "<b> Tudo bem?</b> (virgula) </br> ";


//Exemplo comando echo com 1 única entrada concatenando com ponto.
echo "Eu sou a Marta ". "<b> Tudo bem?</b> (ponto)</br> ";

// Usando aspas single, imprimirá o nome da variável e não o valor.
$nome="Marta";
echo 'Nome da variável $nome </br>'; 
echo "Eu sou a $nome </br>"; 

//imprimindo aspas na tela do browse
echo "Eu sou a  \"$nome\".</br></br>";


/***************
PRINT
****************/
//permite uma única entrada e a saída e sempre 1.
print "Minha cidade natal é Serra </br>";
print "Retorno: ". print . " ";


/***************
PRINTF
****************/
//O texto é formatado de acordo com um padrão
//
$nome = "Marta";
$idade = 50;
// %d -  número decimal com sinal (negativo, zero or positivo) (inteiro)
// %s - string
// %f - ponto flutuante
printf ("</br></br> Meu nome é %s, idade %d", $nome, $idade);


/***************
SPRINTF
****************/
$nome = "Marta";
$idade = 50;
print sprintf ("</br></br> Olá, Meu nome é %s, idade %d", $nome, $idade);




?>
</body>

</html>