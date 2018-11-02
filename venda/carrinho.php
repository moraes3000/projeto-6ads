<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 02/11/2018
 * Time: 19:39
 */
require '../conexao/conexao.php';
    session_start();
    if(!isset($_SESSION['item'])){
        $_SESSION['item'] = array();
    }

//add ao carrinho
    if(isset($_GET['add']) && $_GET['add'] == "carrinho"){
       $idProduto = $_GET['id'];
       if(!isset($_SESSION['item'][$idProduto])){
           $_SESSION['item'][$idProduto] = 1;
       }else{
           $_SESSION['item'][$idProduto] += 1;
       }
    }
    echo "<br>.$idProduto.<br>";
var_dump($_SESSION);


//    mostrar carrinho
if(count($_SESSION['item'])==0){
        echo "carrinho vazio <br> <a href='cad-venda.php' class='btn btn-primary'>Adicionar item</a> ";
}else{
//     $conexao = new PDO('mysql:host=localhost;dbname=estoque_impacto;"root";""');
     foreach ($_SESSION['item'] as $produto){
         $select = $conn->prepare("SELECT * FROM produto where id=? ");
         $select->bindParam(1,$idProduto);
         $select->execute();
         $produtos = $select->fetchAll();

         echo $produto[0]["pro_nome"];
     }
}