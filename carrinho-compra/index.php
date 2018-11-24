<?php
require_once "functions/product.php";
//$pdoConnection = require_once "connection.php";
//$products = getProducts($pdoConnection);
$pesquisa =$_POST['pesquisa'];

echo $pesquisa;

require '../conexao/conexao.php';
$sql = "SELECT * FROM produto WHERE pro_nome LIKE '%$pesquisa%'";
$statement = $conn->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_OBJ); ?>
?>
<?php require '../base/header.php'; ?>



	<div class="container">

            <h1 class="display-4">Lista de Produto</h1>
        <form class="" method="POST" action="index.php">
            <input type="text" name="pesquisa">
            <input type="submit" value="Enviar">
        </form>

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
                <?php foreach($rows as $row): ?>
                    <tr>
                        <td><?= $row->pro_id; ?></td>
                        <td><?= $row->pro_nome; ?></td>
                        <td>R$<?php echo number_format($row->pro_venda, 2, ',', '.')?></td>
                        <td> <a class="" href="carrinho.php?acao=add&id=<?php echo $row->pro_id;?>">Adicionar ao carrinho</a></td>

                    </tr>
                <?php endforeach; ?>

                </tbody>


		</div>
	</div>

<?php require '../base/footer.php'; ?>