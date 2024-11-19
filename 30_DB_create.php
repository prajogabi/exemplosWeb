<?php
//Classe de cliente
include_once '30_DB_Cliente.php';

//Se a sessão não existir, então inicia a sessão
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}


//verifica se o botão cadastrar foi acionado
if(isset($_POST['btn-cadastrar'])):
	
	//sanitiza os campos do formulário
	$nome=filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
	$sobrenome=filter_var($_POST['sobrenome'], FILTER_SANITIZE_STRING);
	$email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$idade=filter_var($_POST['idade'], FILTER_SANITIZE_NUMBER_INT);

	//instancia o cliente
	$cliente = new Cliente();	
	
	//informa os dados do cliente
	$cliente->setNome($nome);
	$cliente->setSobrenome($sobrenome);
	$cliente->setEmail($email);
	$cliente->setIdade($idade);
	$cliente->setTipoCliente(1);
	
	
	//insere o cliente
	if($cliente->insert()):
		$_SESSION['mensagem'] = "Cadastro com sucesso!";
		header('Location: 30_DB_index.php?sucesso');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar!";		
		header('Location: 30_DB_index.php?erro');
	endif;
endif;	



?>