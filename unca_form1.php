<!DOCTYPE html>
<html>
<head>
<title>Validação de formulário</title>
</head>
<body>

<h1>Formulário - Validação</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	
	Idade: <input type="text" name="idade"><br><br>
	Nome: <input type="text" name="nome"><br><br>
	Email: <input type="text" name="email"><br><br>
	Peso: <input type="text" name="peso"><br><br>
	IP: <input type="text" name="ip"><br><br>
	<button type="submit" name="enviar-formulario"> Enviar </button>

</form>

	<?php				
	 //isset - verificar se existe uma variável criada ou se clicou no formulário
	 //A primeira vez que a página carrega é nulo
	 if (isset($_POST['enviar-formulario'])):
			
		//var_dump($_POST);
		$erros = array(); 
		$idade = $_POST['idade'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];	
		$peso = $_POST['peso'];	
		$ip = $_POST['ip'];	
			 
		//validações
		$res = array("options"=>array("regexp"=>"/^[a-zA-Z]/"));
		if(! filter_var($nome, FILTER_VALIDATE_REGEXP,$res)) {		  
			  $erros[]= "O nome deve possuir somente letras [a-zA-Z].";
		}
			
		if ( filter_var($idade,FILTER_VALIDATE_INT) === false): 
			 $erros[] = "A idade precisa ser um inteiro.";
		 endif;
		
		if(filter_var($email,FILTER_VALIDATE_EMAIL)===false): 
			 $erros[] = "O email está inválido.";
		endif;

		
		if(filter_var($peso,FILTER_VALIDATE_FLOAT) ===false): 
			 $erros[] = "O peso está inválido.";
		endif;
		
		
		
		if(filter_var($ip,FILTER_VALIDATE_IP)=== false): 
			$erros[] = "O IP está inválido.";
		endif;
		
		
		if (!empty($erros)):
			foreach($erros as $erro):
				echo "</br> <li> $erro </li>";
			endforeach;
		else:
			echo "</br> Parabéns, seus dados estão corretos!";
			echo " <br> <br> <h1>Dados preenchidos no Formulário </h1><br>";
			echo "<h4> Nome: $nome </h4> Email: $email <br> <br>";
			echo "<p> Idade: $idade </p>";
			echo "<p> Peso: $peso </p>";
			echo "<p> IP: $ip </p>";
		endif;	
	 endif;
 
?>




</body>

</html>