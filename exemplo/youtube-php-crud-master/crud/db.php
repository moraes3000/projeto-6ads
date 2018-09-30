<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 29/09/2018
 * Time: 19:52
 */
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "estoque_impacto";



$dsn = 'mysql:host=localhost;dbname=estoque_impacto';
$username = 'root';
$password = '';
$options = [];
try {
    $conn = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
}



if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
}else{
    echo "Conexao realizada com sucesso";
}