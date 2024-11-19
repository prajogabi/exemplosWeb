<?php
//Porque usar criptografia? 
//proteger documentos secretos, 
//transmitir informações confidenciais pela Internet ou por uma rede local, etc.


//base64_encode - criptografia de mão dupla 
//(criptografa e decriptografa)
//usando o algoritmo de codificação Base64, o tamanho dos arquivos 
//aumentam em 33%, pois ele substitui 
//a cada 3 bytes por 4 bytes. 
$senha="123456"; //$senha=teste;

$novasenha =base64_encode($senha);
echo "Base64: ". $novasenha . "<br>";
echo "Senha Senha é:". base64_decode($novasenha);

echo "<hr>";

//Md5 - Criptografia de mão única (Não é possível decriptografar)
//geram o mesmo hash com 32 caracteres
//realizar comparação do hash no banco de dados
echo "Md5: ". md5($senha); 
echo "<br><br>";

//Sha1 - criptografia de mão única
//geram o hash com 40 caracteres.
echo "Sha1: ". sha1($senha); 

//site com banco de dados de hash code gerados
//senha faceis são facilmente "decriptografadas"
//crackstation.net

?>