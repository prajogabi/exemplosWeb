<!DOCTYPE html>
<html>
<head>
<title>Título do documento HTML</title>
</head>
<body>


<!--SANITIZAÇÃO
FUNÇÕES (filter_input - filter_var)
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
-->

<?php
 //os dados do formulário serão enviados para essa página
 //isset - verificar se existe uma variável criada ou se clicou no formulário - A primeira vez que a página carrega é nulo
 if (isset($_POST['enviar-formulario'])):
	//echo "Enviou <br>";
	//var_dump($_POST); //superglobal $_POST
	$erros = array(); //array de erros
	
	
	// (Não remove)Transforma os caracteres <>& e valores abaixo de 32 da tabela ASCII em HTML
	//// a funcação htmlspecialchars converte caracteres especiais em codigos (outra opção para sanitização)
	$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);//Codifica em HTML a string
	
	//$nome=$_POST['nome'];
	echo $nome; 
	//testar com <button> teste</button>
	//<script> alert("Executando script malicioso!"); </script>
	//echo $_POST['nome'];
	
	//Remove todos os caracteres, exceto os dígitos, sinal de mais e menos.
	$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);//Remove todos caracteres, exceto números sinal de mais e menos.
	echo $idade; 
	
	//Remove todos os caracteres, exceto letras, dígitos e !#$%&'*+-=?^_`{|}~@.[].
	//testar com marta contato().@gmail.com (remove caracteres que não são permitidos no email)
	$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);//Remove todos caracteres, exceto letras, números e !#$%&'*+-=?^_`{|}~@.[].
	echo $email; 

	//USAR SEMPRE FILTROS SANITIZAÇÃO E VALIDAÇÃO EM SEUS FORMULÁRIOS
	//exibindo mensagens
	//empty - retorna verdadeiro e falso/verificar se a variável está vazia
	if (!empty($erros)):
		foreach($erros as $erro):
			echo "<li> $erro </li>";
		endforeach;
	else:
		echo "Parabéns, seus dados estão corretos!";
	endif;	
 endif;
 
?>


<!--Vai imprimir o nome da própria página  (auto chamada)-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Nome: <input type="text" name="nome"><br>
Idade: <input type="text" name="idade"><br>
Email: <input type="text" name="email"><br>




<button type="submit" name="enviar-formulario"> Enviar </button>

</form>


</form>

</body>

</html>