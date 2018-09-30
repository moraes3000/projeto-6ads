<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 29/09/2018
 * Time: 20:48
 */

require '../conexao/conexao.php';
$message = '';
if (isset ($_POST['name'])  ) {
    $name = $_POST['name'];

    $sql = 'INSERT INTO categoria(cat_nome) VALUES(:name)';
    $statement = $conn->prepare($sql);
    if ($statement->execute([':name' => $name])) {
        $message = 'Categoria cadastrada';
    }
}
?>
<?php require '../base/header.php'; ?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Cadastro de Categoria de produtos</h2>
            </div>
            <div class="card-body">
                <?php if(!empty($message)): ?>
                    <div class="alert alert-success">
                        <?= $message; ?>
                    </div>
                <?php endif; ?>
                <form method="post">
                    <div class="form-group">
                        <label for="name">Nome da categoria</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cadastrar Categoria</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



<?php require '../base/footer.php'; ?>