<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 30/09/2018
 * Time: 10:59
 */


require '../conexao/conexao.php';
require '../base/header.php';
$sql = 'SELECT * FROM fornecedor';
$statement = $conn->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_OBJ); ?>
    <div class="container">
        <h1 class="display-4">Lista de fornecedor</h1>
        <table class="table table-striped table-bordered  table-hover">
            <thead class="thead-dark">

            <tr>
                <th scope="col">Cod</th>
                <th scope="col">Nome </th>
                <th scope="col">Rua</th>

                <th scope="col">CNPJ/CPF</th>
                <th scope="col">Numero</th>
                <th scope="col">CEP</th>

                <th scope="col">Cidade</th>
                <th scope="col">UF</th>
                <th scope="col">Referencia</th>


                <th scope="col">Telefone</th>
                <th scope="col">Celular</th>
                <th scope="col">Email</th>
                <th scope="col">Ação</th>

            </tr>

            </thead>

            <tbody>

            <?php foreach($rows as $row): ?>
                <tr>
                    <td><?= $row->for_id; ?></td>
                    <td><?= $row->for_nome; ?></td>
                    <td><?= $row->for_rua; ?></td>

                    <td><?= $row->for_cnpj_cpf	; ?></td>
                    <td><?= $row->for_numero; ?></td>
                    <td><?= $row->for_rua; ?></td>

                    <td><?= $row->for_cidade; ?></td>
                    <td><?= $row->for_estado; ?></td>

                    <td><?= $row->for_referencia; ?></td>

                    <td><?= $row->for_tel; ?></td>
                    <td><?= $row->for_cel; ?></td>
                    <td><?= $row->for_email; ?></td>

                    <td>
                        <a href="edit-fornecedor.php?id=<?= $row->for_id ?>" >  <i class="fas fa-edit "></i></a>
                        <a onclick="return confirm('Deseja remover esse item')" href="delete-fornecedor.php?id=<?= $row->for_id ?>" class=''> <i class="fas fa-trash-alt float-right"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>


            </tr>

            </tbody>
        </table>
        <a href="cad-fornecedor.php" class="btn btn-primary" >Add Fornecedor</a>
    </div>


<?php require '../base/footer.php'; ?>