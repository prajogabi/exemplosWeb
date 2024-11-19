<?php 
$meu_titulo = 'Cadastro Produto';
include 'header.php';

include 'menu.php';

?>
<div class="container p-5">
        <h1>Cadastro de Produto</h1>
        
        <form action="dadosform.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Código</label>
                <input class="form-control" id="nome" type="text" name="nome" placeholder="Digite o código">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Descrição</label>
                <input class="form-control" id="email" type="email" name="email" placeholder="Digite a descrição">
            </div>           
            <input class="btn btn-primary" type="submit" value="Cadastrar" />
            </div>
        </form>
    </div>


<?php include 'footer.php';?>
