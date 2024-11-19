<!DOCTYPE html>
<html>
<head>
<title>Exemplo 1 - Variável Superglobal</title>
</head>
<!--  Variáveis nativas que estão sempre disponíveis em todos escopos -->

<body>
<?php

echo "Variável superglobal Server <br>";

//Informação do servidor e ambiente de execução
/*A variavel superglobal $_SERVER é um array contendo informação 
como cabeçalhos, paths, e localizações do script.*/
//https://www.php.net/manual/pt_BR/reserved.variables.server.php
var_dump($_SERVER);
echo "<br> <br>";
echo "Nome do arquivo: " . $_SERVER['PHP_SELF']. "<br>"; //nome do arquivo script que está executando
echo "Nome do host: ". $_SERVER['SERVER_NAME']. "<br>"; //O nome host do servidor onde o script atual é executado. 
echo "Caminho absoluto do script: " . $_SERVER['SCRIPT_FILENAME']. "<br>"; //O caminho absoluto o script atualmente em execução.
echo "Diretório raiz de execução: " . $_SERVER['DOCUMENT_ROOT']. "<br>"; //O diretório raiz sob onde o script atual é executado, como definido no arquivos de configuração do servidor.
echo "Porta da máquina servidora: " . $_SERVER['SERVER_PORT']. "<br>"; //A porta na máquina servidora utilizada pelo servidor web para comunicação.

?>
</body>

</html>