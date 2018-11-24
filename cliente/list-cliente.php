<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 30/09/2018
 * Time: 10:59
 */


require '../conexao/conexao.php';
require '../base/header.php';
$sql = 'SELECT * FROM cliente';
$statement = $conn->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_OBJ); ?>
<div class="container">
    <h1 class="display-4">Lista de Categoria</h1>
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
                <td><?= $row->cli_id; ?></td>
                <td><?= $row->cli_nome; ?></td>
                <td><?= $row->cli_rua; ?></td>

                <td><?= $row->cli_cnpj_cpf	; ?></td>
                <td><?= $row->cli_numero; ?></td>
                <td><?= $row->cli_rua; ?></td>

                <td><?= $row->cli_cidade; ?></td>
                <td><?= $row->cli_estado; ?></td>

                <td><?= $row->cli_referencia; ?></td>

                <td>FK</td>
                <td>FK</td>
                <td>FK</td>

                <td>
                    <a href="edit-cliente.php?id=<?= $row->cli_id ?>" >  <i class="fas fa-edit "></i></a>
                    <a onclick="return confirm('Deseja remover esse item')" href="delete-cliente.php?id=<?= $row->cli_id ?>" class=''> <i class="fas fa-trash-alt float-right"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>


        </tr>

        </tbody>
    </table>
    <a href="cad-cliente.php" class="btn btn-primary" >Add Fornecedor</a>
</div>


<?php require '../base/footer.php'; ?>