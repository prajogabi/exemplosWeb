
<!DOCTYPE html>
<html>
<head>
<title>Exemplo 1</title>
</head>

<body>
<?php 
//Esse é meu primeiro código 
/* comentário
multiplas linhas */
//https://topic.alibabacloud.com/a/php-echo-print-printf-sprintf-function-differences-and-use_1_11_30709970.html

/***************
ECHO
****************/
echo "</br></br> </br>  <b>ECHO </b></br> </br>" ;

//permite várias entradas
echo "<h3>Eu sou a Marta </br></h3>";
//Use virgula para concatenar várias entradas.
echo "Eu sou a Marta ", "<b> Tudo bem?</b> (virgula) </br> ";
//concatenando com ponto
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
echo "</br></br> </br>  <b>PRINTF </b></br> </br>" ;

printf ("</br></br> Meu nome é %s, idade %d", $nome, $idade);


/***************
SPRINTF
****************/
echo "</br></br> </br>  <b>SPRINTF </b></br> </br>" ;

$nome = "Marta";
$idade = 50;
print sprintf ("</br></br> Olá, Meu nome é %s, idade %d", $nome, $idade);


/***
 * VAR_DUMP
 * retorna void e imprime o valor e o tipo da variavel
 */

 echo "</br></br> </br>  <b>VAR_DUMP </b></br> </br>" ;

$b = 3.1;
$c = true;
var_dump($b, $c);


?>
</body>

</html>