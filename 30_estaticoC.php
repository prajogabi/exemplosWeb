<?php

//Classe saudacao
class Saudacao {
	// O método estático pode ser public ou protected.
  protected static  function getSaudacao() {
	   
    return "<font color='red'>Ola Mundo!</font>";
  }
}

//Classe saudacao_customizada
class Saudacao_Customizada extends Saudacao {
  public $saudacao;
  
  static function getSaudacao() {
	   
    return "<font color='blue'>Ola Mundo!</font>";
  }
  
  
  public function __construct() {
	//chamada ao método estático dentro de classe herdada
	
	//parent: Faz referência a classe pai que foi herdada pela classe atual.	
    $this->saudacao = parent::getSaudacao();
  }
}

$obj = new Saudacao_Customizada;
echo $obj->saudacao;
?>
