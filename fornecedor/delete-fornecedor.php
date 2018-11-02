<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 30/09/2018
 * Time: 11:39
 */

require '../conexao/conexao.php';

$id = $_GET['id'];
$sql = 'DELETE FROM fornecedor WHERE for_id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])) {
    $redirect = "list-fornecedor.php";
    header("Location: $redirect");
}
