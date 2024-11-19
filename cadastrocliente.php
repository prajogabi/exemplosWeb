<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>
	<link rel="stylesheet" href="css/styleslcliente.css">
    <title>Cadastro de Cliente</title>
</head>
<body>
<div class="container p-5">
        <h1>Cadastro de Cliente</h1>
        
        <form action="dadoscliente.php" method="post">
            <fieldset class="border p-4 border-secondary">
               
                    <div class="form-group col-md-4 mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input class="form-control" id="nome" type="text" name="txtnome" placeholder="Digite o nome">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input class="form-control" id="email" type="text" name="txtemail" placeholder="Digite o email">
                    </div>
             
              
                    <div class="form-group col-md-2 mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input class="form-control" id="senha" type="password" name="txtsenha" placeholder="Digite a senha">
                    </div>
                    <div class="form-group col-md-2 mb-3">
					    <label for="preco" class="form-label">Nível de escolaridade :</label>						
						<input type="radio" id="fundamental" name="fav_escola" value="fundamental">
						<label for="fundamental">Ensino fundamental</label><br>
						<input type="radio" id="medio"  name="fav_escola" value="medio">
						<label for="medio">Ensino médio</label><br>
						<input type="radio" id="superior"  name="fav_escola" value="superior">
						<label for="superior">Superior completo</label>
                    </div>

                
                <input class="btn btn-primary" type="submit" value="Cadastrar" name="btcadastrar" />
            </fieldset>
        </form>
    </div>


   
</body>
</html>