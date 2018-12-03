<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 01/12/2018
 * Time: 17:13
 */
session_start();

if (isset($_GET['remover']) && $_GET['remover'] == "carrinho"){
    $idProduto = $_GET=['id'];
    unset($_SESSION['itens']['$idProduto']);
    echo '<meta http-equiv="refresh" content="0;URL=carrinho.php">';
}
