<!DOCTYPE html>
<html>
<body>

<?php

/*
ESCOPO ESTÁTICO - LOCAL
Uma variável estática existe somente 
no escopo local da função, mas não perde seu valor
quando o nível de execução do programa deixa o escopo.

OBS: não é possível chamar a variável fora da função
*/
function myTest() {
  static $x = 0;
  echo $x;
  $x++; //$x= $x + 1;  
}


myTest();
echo "<br>";
myTest();
echo "<br>";
myTest(); 
//Variáveis estáticas fornecem uma solução para lidar 
//com funções recursivas. Uma função recursiva é aquela chama a si mesma

//echo "$x"; //erro

//Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted.
?> 

</body>
</html>

