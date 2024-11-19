<?php
class Fruta {
  private $nome; //também pode mudar o modificar de acesso dos atributos
  private $cor;
  private $peso;

  function set_nome($n) {  // uma função pública (default)
    $this->nome = $n;
  }
  protected function set_cor($n) { // uma função protected 
    $this->cor = $n;
  }
  private function set_peso($n) { // uma função private
    $this->peso = $n;
  }
}



	$manga = new Fruta();
	$manga->set_nome('Manga'); // OK
	
	
	try { //comando que trata exceção (erro)
		$manga->set_cor('Amarela'); // ERROR
	}
	catch(Error  $e) { //captura e trata o erro'	
	  echo 'Erro de responsabilidade do programador: chamando uma função protect ';
	 
	}catch(Exception $e1) { //captura e trata a exceção	
	  echo 'Exceção: ' .$e1->getMessage();
	  
	}finally{
		echo "<br> <br> Finalizado.<br> <br>";
	}
	
	

	try { //comando que trata exceção (erro)
		$manga->set_peso('300'); // ERROR
	}	
	catch( Error  $e) { //captura e trata o erro	
	  echo 'Erro de responsabilidade do programador: chamando uma função private - ' .$e->getMessage();
	}catch( Exception $e1 ) { //captura e trata a exceção	
	  echo 'Exceção: ' .$e1->getMessage();
	}	
		
	
	

?>
