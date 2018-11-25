<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 30/09/2018
 * Time: 10:36
 */

require '../conexao/conexao.php';

$id = $_GET['id'];
$sql = 'DELETE FROM produto WHERE pro_id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])) {
    $redirect = "list-produto.php";
    header("Location: $redirect");
}
