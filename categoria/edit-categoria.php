<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 29/09/2018
 * Time: 21:32
 */


require '../conexao/conexao.php';
require '../base/header.php';
$redirect = "127.0.0.1/estoque/categoria/lista-categoria.php";
$id = $_GET['id'];
$sql = 'SELECT * FROM categoria WHERE cat_id=:id';
$statement = $conn->prepare($sql);
$statement->execute([':id' => $id ]);
$row = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])) {
    $name = $_POST['name'];

  $sql = 'UPDATE categoria SET cat_nome=:name WHERE cat_id=:id';
  $statement = $conn->prepare($sql);
  if ($statement->execute([':name' => $name, ':id' => $id])) {
      $redirect = "http://127.0.0.1/estoque/categoria/lista-categoria.php";
      header("Location: $redirect");
  }
}
 ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Editar Categoria</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $row->cat_nome; ?>" type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Editar Categoria</button>
        </div>
      </form>
    </div>
  </div>
   <?php echo  'id = '. $id;?>
    <?php echo  'nome = '. $name;?>
    <?php echo  'sql = '. $sql;?>
</div>
<?php require '../base/footer.php';


?>

