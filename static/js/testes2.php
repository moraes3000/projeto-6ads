<?php
include ('../../template/geral/conexao.php');
$pesquisa = $_POST['pesquisa'];

$cliente = "SELECT *FROM `produto` WHERE pro_nome LIKE '%$pesquisa%'";
//SELECT * FROM `produto` WHERE pro_nome LIKE '%mer%'



echo $pesquisa;
$result2 = $conn->query($cliente);
     while ($row = $result2->fetch_row()){
         echo $row[0] .'<br>';
         echo $row[1];
     }
