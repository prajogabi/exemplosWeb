<?php
class Saudacao {

 //obrigatório ter o construtor	
 public function __construct(){	
   
	
 }
 
 
  public static function saudacao() {
	   
    echo "<font color='purple'>Ola Mundo!</font>";
  }
}


class AlgumaOutraClasse {
  public function messagem() {
	//chamada ao método estático dentro de OUTRA classe
    Saudacao::saudacao();
  }
}


// Chamada ao método estático
$obj= new AlgumaOutraClasse();
$obj->messagem();

?>