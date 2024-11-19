<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<!-- BOOSTRAP CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <!-- (1) adicionar navbar.bg-light -->
    <!--(9) adicionar a classe navbar-expand-sm para que o menu fique visivel em determinada resolução de tela -->
    <!--(13) adicionar a classe navbar-dark e bg-dark ao componente nav-->
    <nav class="navbar bg-dark navbar-dark navbar-expand-sm">
        <!-- (2) adicionando um texto e logotipo com o comando a.navbar-brand{Bootstrap 5}-->
        <!-- (3) O texto ficou muito colado na margem, para ajustar, crie uma div.container-fluid-->
        <div class="container-fluid">
            <!-- (5) para alinhar verticalmente centralizados, inclua as classes d-flex align-items-center  -->
            <a href="" class="navbar-brand d-flex align-items-center">
                <!--(4) adicionar um icone com a fonte 1 e margem a direita de 2 unidade com o comando i.bi-bootstrap-fill.fs-1.me-2-->                
                <i class="bi-bootstrap-fill fs-1 me-2"></i>
                Bootstrap 5                            
            </a>

            <!--(10) Adicionar o botão hamburgue com o comando button.navbar-toggler[type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar"] -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
                <!--(12) Adicionar icone ao botão hamburgue com o comando span.navbar-toggler-icon -->
                <span class="navbar-toggler-icon"></span>

            </button>

            <!--(6) criar menus com o comando div.collapse.navbar-collapse -->
            <!--(11) Adicionar o atributo id="menuNavbar" -->
            <div class="collapse navbar-collapse" id="menuNavbar">
                    <!--(7) continuar criando menus com o comando div.navbar-nav -->  
                    <!--(15) adicionar a classe ms-auto para o menu ficar alinhado a direita-->                  
                    <div class="navbar-nav ms-auto">
                        <!--(8) continuar criando menus com o comando a.navbar-link -->
                        <a href="17loginB.php" class="nav-link">Login</a>
                        <a href="17logout.php" class="nav-link">Logout</a>
                        <a href="17home.php" class="nav-link">Home</a>
                    </div>

            </div>

           
        </div>


    </nav>