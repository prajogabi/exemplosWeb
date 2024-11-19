<?php

$senha="123456"; 

//Por padrão o PHP usar o algoritmo BCRYPT
//Gera hash aleatório de 60 caracteres. 
//Toda vez gera um novo código com 60 caracteres.
//Usa técnica de salt
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

echo "Bcrypt: ". $senhaSegura; 

echo "<br>";
echo "<br>";
$senha_db='$2y$10$HuFMcUExiZKrIlyKy96ape1cJijITXdGHT6lVan6ki88QnIfqZXaK';

if (password_verify($senha,$senha_db)):
	echo "Senha válida";
else:
	echo "Senha inválida";
endif;

//Advanced Encryption Standard (AES) 
// É recomendada e usada pelo governo americano
//http://csrc.nist.gov/publications/fips/fips197/fips-197.pdf

?>