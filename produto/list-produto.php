<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 29/09/2018
 * Time: 21:00
 */



//
require '../conexao/conexao.php';
require '../base/header.php';



$pesquisa =$_POST['pesquisa'] ;

//echo $pesquisa;

require '../conexao/conexao.php';
$sql = "SELECT * FROM produto WHERE pro_nome LIKE '%$pesquisa%'";
$statement = $conn->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_OBJ); ?>
    <div class="container">
        <h1 class="display-4">Lista de Produto</h1>
        <form class="form-group" method="POST" action="list-produto.php">
            <input  type="text" name="pesquisa">
            <input type="submit" value="Enviar">
        </form>
        <table class="table table-striped table-bordered  table-hover">
            <thead class="thead-dark">

            <tr>
                <th scope="col">Cod</th>
                <th scope="col">Nome</th>
<!--                <th scope="col">Foto</th>-->
                <th scope="col">Quantidade Estoque Atual</th>
                <th scope="col">Quantidade Estoque Minima</th>
                <th scope="col">Quantidade Estoque maxima</th>
                <th scope="col">Ação</th>

            </tr>

            </thead>

            <tbody>

            <?php foreach($rows as $row): ?>
                <tr>
                    <td><?= $row->pro_id; ?></td>
                    <td><?= $row->pro_nome; ?></td>

<!--                    <td scope="row">--><?php //  echo $row->pro_id;?><!--</td>-->
                    <td scope="row" class="
                        <?php if($row->pro_quantidade_atual > $row->pro_quantidade_minima) {
                            echo 'text-success';
                        }
                        else{
                            echo  'text-danger';
                        } ?>">

                        <?php   echo $row->pro_quantidade_atual;?>
                    </td>
                    <td scope="row"><?php   echo $row->pro_quantidade_minima;?></td>
                    <td scope="row"><?php   echo $row->pro_quantidade_maxima;?></td>

                    <td>
                        <a href="edit-produto.php?id=<?= $row->pro_id ?>" title="editar" >  <i class="fas fa-edit "></i></a>
                        <a onclick="return confirm('Deseja remover esse item')" href="delete-produto.php?id=<?= $row->pro_id ?>" class='' title="Excluir"> <i class="fas fa-trash-alt float-right"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>


            </tr>

            </tbody>
        </table>
        <a href="cad-produto.php" class="btn btn-primary" >Adicionar  Produto</a>
    </div>

<?php require '../base/footer.php'; ?>