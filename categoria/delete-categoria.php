<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 29/09/2018
 * Time: 21:26
 */

require '../conexao/conexao.php';

$id = $_GET['id'];
$sql = 'DELETE FROM categoria WHERE cat_id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])) {
    $redirect = "lista-categoria.php";
    header("Location: $redirect");
}
