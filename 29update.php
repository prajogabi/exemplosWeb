<?php
//headers - comando que especifica características da resposta do cabeçalho HTTP.

//Domínios autorizados a acessar os recursos do servidor
header('Access-Control-Allow-Origin: *');
//Indica que o formato do corpo da solicitação é JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');

//Especificando os headers permitindos na requisição
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

//incializa banco de dados e método requisição
include_once('29initialize.php'); 

//Instancia objeto Post com a conexão com o banco de dados
$post = new Post($db);

//get raw posted data
$data = json_decode(file_get_contents("php://input"));

$post->id = $data->id;
$post->titulo = $data->titulo;


//create post
if($post->update()){
	
	echo json_encode(
		array('message' => 'Post update.')
	
	);
}else{
	echo json_encode(
		array('message' => 'Post not update.')
	);
}
?>