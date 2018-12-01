<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 01/12/2018
 * Time: 17:13
 */
session_start();
$idProduto = $_GET=['id'];
if (isset($_GET['remover']) && $_GET['remover'] == "carrinho"){
    $idProduto = $_GET=['id'];
    unset($_SESSION['itens']['$idProduto']);
    echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0"; URL=carrinho.php>';
}