<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 30/09/2018
 * Time: 11:42
 */


require '../conexao/conexao.php';
require '../base/header.php';
$redirect = "127.0.0.1/estoque/categoria/lista-categoria.php";
$id = $_GET['id'];
$sql = 'SELECT * FROM cliente WHERE cli_id=:id';
$statement = $conn->prepare($sql);
$statement->execute([':id' => $id ]);
$row = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])) {
    $name = $_POST['name'];
    $cli_cep = $_POST['cli_cep'];
    $cli_rua = $_POST['cli_rua'];
    $cli_cnpj_cpf = $_POST['cli_cnpj_cpf'];
    $cli_numero = $_POST['cli_numero'];
    $cli_cidade = $_POST['cli_cidade'];
    $cli_estado = $_POST['cli_estado'];
    $cli_referencia = $_POST['cli_referencia'];
    $cli_bairro = $_POST['cli_bairro'];

    $sql = 'UPDATE cliente SET cli_nome=:name WHERE cli_id=:id';
    $for_cep = $_POST['for_cep'];
    $for_rua = $_POST['for_rua'];
    $for_cnpj_cpf = $_POST['for_cnpj_cpf'];
    $for_numero = $_POST['for_numero'];
    $for_cidade = $_POST['for_cidade'];
    $for_estado = $_POST['for_estado'];
    $for_referencia = $_POST['for_referencia'];
    $for_bairro = $_POST['for_bairro'];

    $sql = 'UPDATE fornecedor SET 
            for_nome=:name,
            for_cep = :for_cep,
            for_rua = :for_rua,
            for_cnpj_cpf = :for_cnpj_cpf,
            for_numero = :for_numero,
            for_cidade = :for_cidade,
            for_estado = :for_estado,
            for_referencia = :for_referencia,
            for_bairro = :for_bairro
            
            
            
            
            
            
 
 WHERE for_id=:id';

    $statement = $conn->prepare($sql);
    if ($statement->execute([
        ':name' => $name,
        ':for_cep' => $for_cep,
        ':for_rua' => $for_rua,
        ':for_cnpj_cpf' => $for_cnpj_cpf,
        ':for_numero' => $for_numero,
        ':for_cidade' => $for_cidade,
        ':for_estado' => $for_estado,
        ':for_referencia' => $for_referencia,
        ':for_bairro' => $for_bairro,

        ':id' => $id
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
                    <input value="<?= $row->cli_nome; ?>" type="text" name="name" id="name" class="form-control">
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="c-tipo">tipo</label>
                        <select class="form-control" id="Categoria">
                            <!--                    --><?php
                            //
                            //                    while ($row = $result->fetch_row()){?>
                            <!--                        <!-- ver a maneira correta de passar a FK na variavel cat_nome-->-->
                            <!--                        <option name="--><?php //  echo $row[0];?><!--" value="--><?php //  echo $row[0];?><!--">--><?php //  echo $row[1];?><!--</option>-->
                            <!--                    --><?php // }?>
                            <option value="">Selecione</option>
                            <option value="1" data-mask="000.000.000-00">Pessoa Física</option>
                            <option value="2" data-mask="00.000.000/0000-00">Pessoa Jurídica</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="c-tipo-mascara">numero do  CNPJ / CPF (colocar funçao para qual for ativo )</label>
                        <input type="number" class="form-control" id="cli_cnpj_cpf" placeholder="CNPJ" name="cli_cnpj_cpf"  value="<?= $row->cli_cnpj_cpf; ?>" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="c-cidade" >CEP</label>

                        <div class="input-group  ">
                            <input class="form-control" name="cli_cep" type="text" id="cli_cep"   value="<?= $row->cli_cep; ?>"size="10"  maxlength="10" OnKeyPress="formatar('#####-###', this)"
                                   onblur="pesquisacep(this.value);" />

                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-search"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="c-cidade">Cidade</label>
                        <input type="text" class="form-control" id="cli_cidade" placeholder="" name="cli_cidade"   value="<?= $row->cli_cidade; ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="c-cidade">Rua</label>
                        <input type="text" class="form-control" id="cli_rua" placeholder="" name="cli_rua"   value="<?= $row->cli_rua; ?>">
                    </div>


                    <div class="form-group col-md-2">
                        <label for="c-numero">Numero</label>
                        <input type="number" class="form-control" id="cli_numero" placeholder="" name="cli_numero"   value="<?= $row->cli_numero; ?>">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="c-bairro">Bairro</label>
                        <input type="text" class="form-control" id="cli_bairro" name="cli_bairro" placeholder=""   value="<?= $row->cli_bairro; ?>">
                    </div>





                    <div class="form-group col-md-2">
                        <label for="c-estado">Estado</label>

                        <input type="text" class="form-control" id="cli_estado" placeholder="" name="cli_estado"   value="<?= $row->cli_estado; ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="c-bairro">Referencia</label>
                        <input type="text" class="form-control" id="cli_referencia" placeholder="" name="cli_referencia"   value="<?= $row->cli_referencia; ?>">
                    </div>




                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info">Editar cliente</button>
                </div>
            </form>
        </div>
    </div>
<!--    --><?php //echo  'id = '. $id;?>
<!--    --><?php //echo  'nome = '. $name;?>
<!--    --><?php //echo  'sql = '. $sql;?>
</div>
<?php require '../base/footer.php';


?>

