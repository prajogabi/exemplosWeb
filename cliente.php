<?php 
$meu_titulo = 'Cadastro Cliente';
include 'header.php';

include 'menu.php';

?>
<div class="container p-5">
        <h1>Cadastro de Cliente</h1>
        
        <form action="dadosform.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input class="form-control" id="nome" type="text" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" id="email" type="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input class="form-control" id="cpf" name="cpf" placeholder="Digite seu cpf">
            </div>
            <input class="btn btn-primary" type="submit" value="Cadastrar" />
            </div>
        </form>
    </div>

<?php include 'footer.php';?>
