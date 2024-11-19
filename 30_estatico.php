<?php
class Saudacao {

 //obrigatório ter o construtor	
 public function __construct(){	}
 
 
  public static function saudacao() {
    echo "Ola Mundo!";
  }
}

// Chamada ao método estático fora da classe
Saudacao::saudacao();
?>