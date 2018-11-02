<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 30/09/2018
 * Time: 11:39
 */

require '../conexao/conexao.php';

$id = $_GET['id'];
$sql = 'DELETE FROM cliente WHERE cli_id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])) {
    $redirect = "list-cliente.php";
    header("Location: $redirect");
}
