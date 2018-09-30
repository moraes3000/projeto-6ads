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
$sql = 'SELECT * FROM categoria';
$statement = $conn->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_OBJ); ?>
<div class="container">
    <h1 class="display-4">Lista de Categoria</h1>
    <table class="table table-striped table-bordered  table-hover">
        <thead class="thead-dark">

        <tr>
            <th scope="col">Cod</th>
            <th scope="col">nome </th>
            <th scope="col">Ação</th>

        </tr>

        </thead>
        
        <tbody>

            <?php foreach($rows as $row): ?>
                <tr>
                    <td><?= $row->cat_id; ?></td>
                    <td><?= $row->cat_nome; ?></td>

                    <td>
                        <a href="edit-categoria.php?id=<?= $row->cat_id ?>" >  <i class="fas fa-edit "></i></a>
                        <a onclick="return confirm('Deseja remover esse item')" href="delete-categoria.php?id=<?= $row->cat_id ?>" class=''> <i class="fas fa-trash-alt float-right"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>


            </tr>

        </tbody>
    </table>
    <a href="cad-categoria.php" class="btn btn-primary" >Add Categoria</a>
</div>

<?php require '../base/footer.php'; ?>