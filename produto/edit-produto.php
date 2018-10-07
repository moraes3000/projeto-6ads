<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 29/09/2018
 * Time: 21:32
 */


require '../conexao/conexao.php';
require '../base/header.php';

$id = $_GET['id'];
$sql = 'SELECT * FROM produto WHERE pro_id=:id';
$statement = $conn->prepare($sql);
$statement->execute([':id' => $id ]);
$row = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])) {
    $name = $_POST['name'];

    $descricao = $_POST['descricao'];

    $pro_quantidade_atual = $_POST['pro_quantidade_atual'];
    $pro_quantidade_minima = $_POST['pro_quantidade_minima'];
    $pro_quantidade_maxima = $_POST['pro_quantidade_maxima'];
    $pro_venda = $_POST['pro_venda'];
    $pro_compra = $_POST['pro_compra'];
//    $cat_id = $_POST['cat_id'];

    $sql = 'UPDATE produto SET 

    pro_nome = :name,
    pro_descricao = :descricao,
    pro_quantidade_atual = :pro_quantidade_atual,
    pro_quantidade_minima = :pro_quantidade_minima,
    pro_quantidade_maxima = :pro_quantidade_maxima,
    pro_venda = :pro_venda,
    pro_compra =:pro_compra

 
 WHERE pro_id=:id';
    $statement = $conn->prepare($sql);
    if ($statement->execute([

        ':name' => $name,
        'descricao' =>$descricao,
        ':pro_quantidade_atual' => $pro_quantidade_atual,
        ':pro_quantidade_minima' => $pro_quantidade_minima,
        ':pro_quantidade_maxima' => $pro_quantidade_maxima,
        ':pro_venda' => $pro_venda,
        ':pro_compra' => $pro_compra,


        ':id' => $id])) {
        $redirect = "http://127.0.0.1/estoque/categoria/lista-categoria.php";
        header("Location: $redirect");
    }
}
?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Editar Produto</h2>
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
                        <input value="<?= $row->pro_nome; ?>" type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Categoria">Categoria</label>



                        <select class="form-control" id="Categoria" name="cat_id">

                            <!--  sempre  vou verificar essa parte no banco ele ta com o valor  0 -->
                            <option  value="" id=""">produto</option>

                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="pro_quantidade_atual-i">Estoque Atual</label>
                            <input  type="number" class="form-control" id="pro_quantidade_atual" name="pro_quantidade_atual"  value="<?= $row->pro_quantidade_atual; ?>" placeholder="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="pro_quantidade_minima-i">Estoque Minimo</label>
                            <input type="number" class="form-control" id="pro_quantidade_minima" name="pro_quantidade_minima" placeholder=""  value="<?= $row->pro_quantidade_minima; ?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="pro_quantidade_maxima-e">Estoque Maximo</label>
                            <input type="number" class="form-control" id="pro_quantidade_maxima" name="pro_quantidade_maxima" placeholder=""  value="<?= $row->pro_quantidade_maxima; ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pro_compra-e">Preco de Compra</label>
                            <input type="number" class="form-control" id="pro_compr"  name="pro_compra" placeholder="" value="<?= $row->pro_compra; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pro_venda-e">Preço de Venda </label>
                            <input type="number" class="form-control" id="pro_venda" name="pro_venda" placeholder=""  value="<?= $row->pro_venda; ?>">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="p-pro_descricao">descricao</label>
                        <!--            ver o pq  nao  ta indo pelo textarea so vai no input -->
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder=""  value="<?= $row->pro_descricao; ?>">
                        <!--            <textarea class="form-control" id="p-desc" name=pro_descricao" rows="3"></textarea>-->
                    </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info">Editar Produto</button>
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
