<?php

// var_dump($_POST);

 $nome=$_POST['nome'];
 $email =$_POST['email'];

echo " <br> <br> Superglobal post <br> <br>";
echo "Seu nome é $nome e seu email é $email. <br> <br>";



// var_dump($_REQUEST);
/*
$nome1=$_REQUEST['nome'];
$email1 =$_REQUEST['email'];

echo " <br> <br> Superglobal request <br> <br>";
echo "Seu nome é $nome1 e seu email é $email1. <br> <br>";
*/



/*
OBSERVAÇÕES

Em questões de eficiência, não há ganho para o PHP 
ao acessar uma variável ou outra (POST ou REQUEST),
porém seu uso pode gerar resultados inesperados.
<?php

setcookie("pesquisa","valorA")

?>
<!DOCTYPE HTML>
<html lang="">
<head>    
    <title></title>
</head>
<body>
<?php
echo "GET =" .$_GET['pesquisa'] . "<br>";
echo "COOKIE =".$_COOKIE['pesquisa']. "<br>";
echo "REQUEST =" .$_REQUEST['pesquisa']. "<br>";
?>
</body>
</html>


para URL:
exemplo.com/index.php?pesquisa=valorB

terá os seguintes valores

GET =valueB
COOKIE =valueA
REQUEST =valueB

Isto depende da ordem definida pela diretiva "variables_order" do php.ini que define a ordem pela qual é feita a ordem 
da precedência das variáveis globais de acordo com a configuração variables_order. 
Por padrão obedece a sequencia EGPCS
(Environment, Get, Post, Cookie, e Server).

O uso indevido do $_REQUEST é uma brecha de segurança, que pode ser explorada.

Além disso, no ponto de vista da leitura do código, fica mais difícil identificar a origem da informação usando $_REQUEST:
// Sem Request
$paginaOrigem       = $_GET['paginaOrigem'];
$id                 = $_POST['id'];
$nome               = $_POST['nome'];
$endereco           = $_POST['endereco'];
$dataUltimoAcesso   = $_COOKIE['ultimoAcesso'];

// Com Request
$paginaOrigem       = $_REQUEST['paginaOrigem'];
$id                 = $_REQUEST['id'];
$nome               = $_REQUEST['nome'];
$endereco           = $_REQUEST['endereco'];
$dataUltimoAcesso   = $_REQUEST['ultimoAcesso'];
*/

?>
