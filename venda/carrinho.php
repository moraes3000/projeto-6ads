<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 01/12/2018
 * Time: 16:07
 */

session_start();
if(!isset($_SESSION['itens'])){//criar a sessao
    $_SESSION['itens'] = array();
}
//add no item
if(isset($_GET['add']) && $_GET['add'] == "carrinho"){
    $idProduto = $_GET['id'];
    if(!isset($_SESSION['itens'][$idProduto])){
        $_SESSION['itens'][$idProduto] = 1;
    }else{
        $_SESSION['itens'][$idProduto] += 1;
    }


}
require "../base/header.php";
//exibir o carrinho

if(count($_SESSION['itens']) == 0){
    echo "Carrinho vazio <br> <a href='venda.php'>Add item</a>";
}else{
    require '../conexao/conexao.php';
    $_SESSION['dados'] = array();
    foreach ($_SESSION['itens'] as $idProduto => $quantidade ){
        $sql = "SELECT * FROM produto WHERE  pro_id=? ";
        $select = $conn->prepare($sql);
        $select->bindParam(1,$idProduto);
        $select->execute();
        $produtos = $select->fetchAll();
        $total = $quantidade * $produtos[0]['pro_venda'];?>

<!---->
<!--        --><?php
//        echo 'id: '.$produtos[0]['pro_id']."<br>";
//        echo 'nome: '.$produtos[0]['pro_nome']."<br>";
//        echo 'venda: '.$produtos[0]['pro_venda']."<br>";
//        echo 'quantidade: '.$quantidade."<br>";
//
//        echo '<a href="remover.php?remover=carrinho&id='.$idProduto.'">remover item</a>';
//        echo 'total: '.$total."<hr>";
/*        <a href="carrinho.php?add=carrinho&id=<?php echo $row->pro_id;?>">Adicionar ao carrinho</a>*/
        array_push($_SESSION['dados'],
        array(
            'id_produto' => $idProduto,
            'quantidade' => $produtos[0]['pro_quantidade_atual'],
            'preco' =>$produtos[0]['pro_venda'],
            'total' => $total
            )


        );
//
    }
//    echo '<pre>';
//        var_dump($_SESSION['dados']);
//        echo '</pre>';
//    echo "<a class='btn btn-primary' href='venda.php'>add item</a>.<br>";
//    echo "<a class='btn btn-success' href='finalizar.php'>Finalizar Pedido</a>";

}

?>
<div class="container">
    <h1 class="display-4">Lista de Produto</h1>
    <table class="table table-striped table-bordered  table-hover">
        <thead class="thead-dark">

        <tr>
            <th scope="col">Cod</th>
            <th scope="col">Nome</th>
            <!--                <th scope="col">Foto</th>-->
            <th scope="col">Quantidade </th>
            <th scope="col">pro_venda</th>


        </tr>

        </thead>
        <?php
        foreach ($_SESSION['itens'] as $idProduto => $quantidade ){
            $sql = "SELECT * FROM produto WHERE  pro_id=? ";
            $select = $conn->prepare($sql);
            $select->bindParam(1,$idProduto);
            $select->execute();
            $produtos = $select->fetchAll();
            $total = $quantidade * $produtos[0]['pro_venda'];

            ?>
            <tr>
                <td><?php echo $produtos[0]['pro_id'] ?></td>
                <td><?php echo $produtos[0]['pro_nome'] ?></td>
                <td><?php echo $produtos[0]['pro_venda'] ?></td>
                <td><?php echo $quantidade ?></td>


            </tr>
        <?php
        }
        ?>

        <tbody>

        </tbody>

    </table>
    <div class="float-right">
    <a class='btn btn-primary' href='venda.php'>add item</a>
    <a class='btn btn-success' href='finalizar.php'>Finalizar Pedido</a>
    </div>
</div>

<?php require '../base/footer.php'; ?>