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

//exibir o carrinho

if(count($_SESSION['itens']) == 0){
    echo "Carrinho vazio <br> <a href='venda.php'>Add item</a>";
}else{
    require '../conexao/conexao.php';

    foreach ($_SESSION['itens'] as $idProduto => $quantidade ){
        $sql = "SELECT * FROM produto WHERE  pro_id=? ";
        $select = $conn->prepare($sql);
        $select->bindParam(1,$idProduto);
        $select->execute();
        $produtos = $select->fetchAll();
        $total = $quantidade * $produtos[0]['pro_venda'];

        echo 'nome: '.$produtos[0]['pro_nome']."<br>";
        echo 'venda: '.$produtos[0]['pro_venda']."<br>";
        echo 'quantidade: '.$quantidade."<br>";
        echo 'total: '.$total."<hr>";

    }
    echo "<a href='venda.php'>add item</a>";

}

