<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>
	<link rel="stylesheet" href="css/styleslivro.css">
    <title>Cadastro de Livro</title>
</head>
<body>
<?php		
	
        //isset - verificar se existe uma variável criada ou se clicou no formulário
        //A primeira vez que a página carrega é nulo
        if (isset($_POST['btcadastrar'])):
                
            $erros = array(); 
            $isbn = $_POST['txtisbn'];
            $titulo = $_POST['txttitulo'];
            $ano = $_POST['txtano'];	
            $preco = $_POST['txtpreco'];	
            $categoria = $_POST['ddlcategoria'];	
               
            //validações		
            if ( filter_var($ano,FILTER_VALIDATE_INT) === false): 
                $erros[] = "O ano precisa ser um inteiro.";
            endif;
                    
            if(filter_var($preco,FILTER_VALIDATE_FLOAT) ===false): 
                $erros[] = "O preço precisa ser um campo com valores reais.";
            endif;
            
            if(strlen(trim($isbn)) != 13):
                $erros[] = "O isbn deve possuir 13 dígitos." . strlen(trim($isbn));
            endif;

            if(strlen($titulo)<5):
                $erros[] = "O título deve conter acima de 5 caracteres.";
            endif;
            
            
            if (!empty($erros)):
                foreach($erros as $erro):
                    echo "</br> <li> $erro </li>";
                endforeach;
            else:?>
                    <div class="container  h-100 d-flex justify-content-center align-items-center">
                    <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title">Parabéns, seus dados estão corretos!</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Dados preenchidos no Formulário</h6>
                        <p class="card-text">Título do livro: <?php echo $titulo?></p>
                        <p class="card-text">ISBN: <?php echo $isbn?></p>
                        <p class="card-text">Preço: <?php echo $preco?></p>
                        <img src="imagem/livro.jpg" class="img-fluid">
                    </div>
                    </div>
                    </div>
           <?php endif;	
        endif;    
    ?>
</body>
</html>