<?php
	session_start();
	require_once "functions/product.php";
	require_once "functions/cart.php";

	$pdoConnection = require_once "connection.php";

	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {

		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){
			addCart($_GET['id'], 1);
		}

		if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){
			deleteCart($_GET['id']);
		}

		if($_GET['acao'] == 'up'){
			if(isset($_POST['prod']) && is_array($_POST['prod'])){
				foreach($_POST['prod'] as $id => $qtd){
						updateCart($id, $qtd);
				}
			}
		}
		header('location: carrinho.php');
	}

	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);


?>
<?php require '../base/header.php'; ?>
	<div class="container">
        <h1 class="display-4">Carrinho de compra</h1>

		<?php if($resultsCarts) : ?>
			<form action="carrinho.php?acao=up" method="post">
			<table class="table table-striped table-bordered  table-hover"">
                <thead class="thead-dark">

                    <tr>
                        <th scope="col">Cod</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>

                        <th scope="col">Ação</th>

                    </tr>

                </thead>
				<tbody>
				  <?php foreach($resultsCarts as $result) : ?>
					<tr>
						
						<td><?php echo $result['name']?></td>
<!--						<td>-->
<!--							<input type="text" name="prod[--><?php //echo $result['pro_id']?><!--]" value="--><?php //echo $result['quantity']?><!--" size="1" />-->
<!--														-->
<!--							</td>-->
						<td>R$<?php echo number_format($result['price'], 2, ',', '.')?></td>
						<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></td>
						<td><a href="carrinho.php?acao=del&id=<?php echo $result['id']?>" class="btn btn-danger">Remover</a></td>
						
					</tr>
				<?php endforeach;?>
				 <tr>
				 	<td colspan="3" class="text-right"><b>Total: </b></td>
				 	<td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
				 	<td></td>
				 </tr>
				</tbody>
				
			</table>

			<a class="btn btn-info" href="index.php">Continuar Comprando</a>
			<button class="btn btn-primary" type="submit">Atualizar Carrinho</button>

			</form>
	<?php endif?>
		
	</div>
<?php require '../base/footer.php'; ?>