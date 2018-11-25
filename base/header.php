<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link  rel="stylesheet" href="../static/css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <title></title>
</head>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="
                        login.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="Venda" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Venda
                        </a>
                        <div class="dropdown-menu" aria-labelledby="Venda">
                            <a class="dropdown-item" href="../carrinho-compra/index.php">Cadastrar</a>
                            <a class="dropdown-item" href="#">Listar</a>

                        </div>
                    </li>
<!--                    cliente CRUD-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="Cliente" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cliente
                        </a>
                        <div class="dropdown-menu" aria-labelledby="Cliente">
                            <a class="dropdown-item" href="../cliente/cad-cliente.php">Cadastrar</a>
                            <a class="dropdown-item" href="../cliente/list-cliente.php">Listar</a>

                        </div>
                    </li>

<!--                    Fornecedor CRUD-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="Fornecedor" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Fornecedor
                        </a>
                        <div class="dropdown-menu" aria-labelledby="Fornecedor">
                            <a class="dropdown-item" href="../fornecedor/cad-fornecedor.php">Cadastrar</a>
                            <a class="dropdown-item" href="../fornecedor/list-fornecedor.php">Listar</a>

                        </div>
                    </li>

<!--                    CATEGORIA TA FUNCIONANDO  O CRUD-->
                    <!--  PRODUTO CRuD  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="Produto" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produto
                        </a>
                        <div class="dropdown-menu" aria-labelledby="Produto">
                            <a class="dropdown-item" href="../produto/cad-produto.php">Cadastrar</a>
                            <a class="dropdown-item" href="../produto/list-produto.php">Listar</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="Fornecedor" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categoria
                        </a>
                        <div class="dropdown-menu" aria-labelledby="Categoria">
                            <a class="dropdown-item" href="../categoria/cad-categoria.php">Cadastrar</a>
                            <a class="dropdown-item" href="../categoria/lista-categoria.php">Listar</a>

                        </div>
                    </li>

                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="usuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                nome do usuario
                            </a>
                            <div class="dropdown-menu" aria-labelledby="usuario">
                                <a class="dropdown-item" href="#">Sair</a>

                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>
    </header>
