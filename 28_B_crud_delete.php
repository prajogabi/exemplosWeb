<?php
//Iniciar  Sessão
session_start();

//Conexão
require_once '28dbconnect.php';

if(isset($_GET['id'])):
	$id=mysqli_escape_string($connect,$_GET['id']);
	
	$sql="DELETE FROM clientes WHERE  id=$id";
	
	if(mysqli_query($connect,$sql)):
		$_SESSION['mensagem'] = "Excluido com sucesso!";
		header('Location: ../28_B_crud_index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao excluir!";
		header('Location: ../28_B_crud_index.php');
	endif;
endif;	



?>