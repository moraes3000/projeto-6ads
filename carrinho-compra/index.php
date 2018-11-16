<?php
require_once "functions/product.php";
$pdoConnection = require_once "connection.php";
$products = getProducts($pdoConnection);

?>
<?php require '../base/header.php'; ?>



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
                    <td>R$<?php echo number_format($product['pro_venda'], 2, ',', '.')?></td>
                    <td> <a class="" href="carrinho.php?acao=add&id=<?php echo $product['pro_id']?>">Adicionar ao carrinho</a></td>

                </tr>
                <?php endforeach;?>
                </tbody>


		</div>
	</div>

<?php require '../base/footer.php'; ?>