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
<div class="container p-5">
        <h1>Cadastro de Livro</h1>
        
        <form action="dadoslivro.php" method="post">
            <fieldset class="border p-4 border-secondary">
               
                    <div class="form-group col-md-4 mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input class="form-control" id="isbn" type="text" name="txtisbn" placeholder="Digite o ISBN">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="email" class="form-label">Título</label>
                        <input class="form-control" id="titulo" type="text" name="txttitulo" placeholder="Digite o título">
                    </div>
             
              
                    <div class="form-group col-md-2 mb-3">
                        <label for="ano" class="form-label">Ano</label>
                        <input class="form-control" id="ano" type="number" name="txtano" placeholder="Digite o ano">
                    </div>
                    <div class="form-group col-md-2 mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input class="form-control" id="preco" type="text" name="txtpreco" placeholder="Digite o preço">
                    </div>

                    <div class="form-group col-md-6 mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select id="categoria" name="ddlcategoria" class="form-control">
                        <option value="Técnico">Técnico</option>
                        <option value="Suspense">Suspense</option>					
                        <option value="Romance">Romance</option>		
                    </select>
             
                </div>
                
                <input class="btn btn-primary" type="submit" value="Cadastrar" name="btcadastrar" />
            </fieldset>
        </form>
    </div>


   
</body>
</html>