<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 03/12/2018
 * Time: 20:27
 */
session_start();
//echo '<pre>';
//var_dump($_SESSION['dados']);
//echo '</pre>';
foreach ($_SESSION['dados'] as $produtos){


require '../conexao/conexao.php';

$insert = $conn->prepare("insert into venda () values (NULL ,?,?,?)");
$insert->bindParam(1,$produtos['id_produto']);
$insert->bindParam(2,$produtos['quantidade']);
$insert->bindParam(3,$produtos['preco']);

$insert->execute();
}
?>


