<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM people WHERE id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: lista-categoria.php");//achar o redirect

}