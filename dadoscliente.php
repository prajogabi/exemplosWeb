<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>
	<link rel="stylesheet" href="css/styleslcliente.css">
    <title>Cadastro de cliente</title>
</head>
<body>
<?php		
	
        //isset - verificar se existe uma variável criada ou se clicou no formulário
        //A primeira vez que a página carrega é nulo
        if (isset($_POST['btcadastrar'])):
                
            $erros = array(); 
            $nome = $_POST['txtnome'];
            $email = $_POST['txtemail'];
            $senha = $_POST['txtsenha'];	
            $escola ='';	
              
            //validações	
			if (isset($_POST['fav_escola'])=== false):							
				$erros[] = "A escolaridade é obrigatório.";
			else:
				$escola = $_POST['fav_escola'];	
			endif;
			
            if ( filter_var($email,FILTER_VALIDATE_EMAIL) === false): 
                $erros[] = "O email precisa ser válido.";
            endif;
                                
            if(strlen(trim($nome)) < 10):
                $erros[] = "O nome deve possuir acima de 10 caracteres." ;
            endif;

            if(strlen($senha)>2):
                $erros[] = "A senha deve conter acima de 4 caracteres e pelos menos 1 numérico.";
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
                        <p class="card-text">Nome: <?php echo $nome?></p>
                        <p class="card-text">Email: <?php echo $email?></p>
                        <p class="card-text">Escolaridade: <?php echo $escola?></p>
                        
                    </div>
                    </div>
                    </div>
           <?php endif;	
        endif;    
    ?>
</body>
</html>