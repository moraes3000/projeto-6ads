<?php
require_once "functions/product.php";
$pdoConnection = require_once "connection.php";
$products = getProducts($pdoConnection);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Carrinho de Compras</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />

</head>
<body>

	<div class="container">

            <h1 class="display-4">Lista de Produto</h1>

            <table class="table table-striped table-bordered  table-hover">
                <thead class="thead-dark">

                <tr>
                    <th scope="col">Cod</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>

                    <th scope="col">Ação</th>

                </tr>

                </thead>
                <tbody>
                <?php foreach($products as $product) : ?>
                <tr>
                    <td><?php echo $product['pro_id']?></td>
                    <td><?php echo $product['pro_nome']?></td>
                    <td>	R$<?php echo number_format($product['pro_venda'], 2, ',', '.')?></td>
                    <td> <a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $product['pro_id']?>" class="card-link">Comprar</a></td>

                </tr>
                <?php endforeach;?>
                </tbody>


		</div>
	</div>
	
</body>
</html>