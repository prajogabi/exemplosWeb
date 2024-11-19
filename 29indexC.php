<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Consumindo dados webservice - UPDATE</title>
	</head>
	<body>
		<?php
		
			//dado que será atualizado no banco de dados	
			$url="http://localhost/29update.php";
		
			//dado que será inserido no banco de dados
			$data = array(			  	
			  'id'      => '3'	,
			  'titulo'      => 'Learning PHP'
			);	
			
			//Lista de opções de contexto do HTTP
			$options = array(
			  'http' => array(
				'method'  => 'PUT',
				'content' => json_encode( $data ),
				'header'=>  "Content-Type: application/json\r\n" .
							"Accept: application/json\r\n"
				)
			);

			//stream_context_create - Função que cria uma stream (dados que serão codificados e enviados via HTTP)
			$context  = stream_context_create( $options );
			//file_get_contents -  Função que lê todo o conteúdo de um arquivo para uma string 
			//Parâmetro 1 ($url): it defines a set of directories where to look for an included/read file.
			//Parâmetro 2 (false): Define um conjutno de diretórios onde incluir/ler arquivos. Como estamos false, será lido do diretório padrão do PHP (Por default, é .:/usr/share/php).
			//Parâmetro 3 ($context): Parâmetros enviados por meio da requisição HTTP
			$result = file_get_contents( $url, false, $context );
			$response = json_decode( $result );
			echo "registro atualizado com sucesso";
		?>
	</body>
</html>
