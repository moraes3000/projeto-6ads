<?php

require '../conexao/conexao.php';

$sql = 'SELECT * FROM categoria';
$statement = $conn->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_OBJ);

$message = '';
if (isset ($_POST['name'])  ) {
    $name = $_POST['name'];
    $descricao = $_POST['descricao'];

    $pro_quantidade_atual = $_POST['pro_quantidade_atual'];
    $pro_quantidade_minima = $_POST['pro_quantidade_minima'];
    $pro_quantidade_maxima = $_POST['pro_quantidade_maxima'];
    $pro_venda = $_POST['pro_venda'];
    $pro_compra = $_POST['pro_compra'];
    $cat_id = $_POST['cat_id'];
//    $pro_img = $_POST['name'];

    $sql = 'INSERT INTO produto(
                pro_nome, 
                pro_descricao,
                pro_quantidade_atual,
                pro_quantidade_minima,
                pro_quantidade_maxima,
                pro_venda,
                pro_compra,
                cat_id
        
    )
            VALUES(
                :name, 
                :descricao,
                :pro_quantidade_atual,
                :pro_quantidade_minima,
                :pro_quantidade_maxima,
                :pro_venda,
                :pro_compra,
                :cat_id
    )';
    $statement = $conn->prepare($sql);
    if ($statement->execute([
        ':name' => $name,
        ':descricao' => $descricao,
        ':pro_quantidade_atual' => $pro_quantidade_atual,
        ':pro_quantidade_minima' => $pro_quantidade_minima,
        ':pro_quantidade_maxima' => $pro_quantidade_maxima,
        ':pro_venda' => $pro_venda,
        ':pro_compra' => $pro_compra,
        ':cat_id' => $cat_id

    ])) {
        $message = 'Categoria cadastrada';
    }
}
?>
<?php require '../base/header.php'; ?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Cadastro de Produto</h2>
            </div>
            <div class="card-body">
                <?php if(!empty($message)): ?>
                    <div class="alert alert-success">
                        <?= $message; ?>
                    </div>
                <?php endif; ?>
                <form  method="post">
                    <div class="form-group">
                        <label for="name">Nome da categoria</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Categoria">Categoria</label>



                        <select class="form-control" id="Categoria" name="cat_id">
                        <?php foreach($rows as $row): ?>
                            <!--  sempre  vou verificar essa parte no banco ele ta com o valor  0 -->
                            <option  value="<?= $row->cat_id; ?>" id="<?= $row->cat_id; ?>"><?= $row->cat_nome; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="pro_quantidade_atual-i">Estoque Atual</label>
                            <input type="number" class="form-control" id="pro_quantidade_atual" name="pro_quantidade_atual" placeholder="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="pro_quantidade_minima-i">Estoque Minimo</label>
                            <input type="number" class="form-control" id="pro_quantidade_minima" name="pro_quantidade_minima" placeholder="">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="pro_quantidade_maxima-e">Estoque Maximo</label>
                            <input type="number" class="form-control" id="pro_quantidade_maxima" name="pro_quantidade_maxima" placeholder="">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pro_compra-e">Preco de Compra</label>
                            <input type="number" class="form-control" id="pro_compr"  name="pro_compra" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pro_venda-e">Preço de Venda </label>
                            <input type="number" class="form-control" id="pro_venda" name="pro_venda" placeholder="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="p-pro_descricao">descricao</label>
                        <!--            ver o pq  nao  ta indo pelo textarea so vai no input -->
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="">
                        <!--            <textarea class="form-control" id="p-desc" name=pro_descricao" rows="3"></textarea>-->
                    </div>

<!--                    <div class="form-row">-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="cod-i">Anexar Foto</label>-->
<!--                            <input type="file" class="form-control-file" id="cod-i" placeholder="Anexar Foto">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-6" >-->
<!---->
<!--                            <img src="../static/img/vira.jpg" width="100" height="100">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->

<!--                    --><?php //echo $sql;?>

                    <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </div>
<?php require '../base/footer.php'; ?>