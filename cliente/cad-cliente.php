<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 30/09/2018
 * Time: 10:46
 */



require '../conexao/conexao.php';
$message = '';
if (isset ($_POST['name'])  ) {
    $name = $_POST['name'];
    $cli_cep = $_POST['cli_cep'];
    $cli_rua = $_POST['cli_rua'];
    $cli_cnpj_cpf = $_POST['cli_cnpj_cpf'];
    $cli_numero = $_POST['cli_numero'];
    $cli_cidade = $_POST['cli_cidade'];
    $cli_estado = $_POST['cli_estado'];
    $cli_referencia = $_POST['cli_referencia'];
    $cli_bairro = $_POST['cli_bairro'];
    $cli_cel = $_POST['cli_cel'];
    $cli_tel = $_POST['cli_tel'];
    $cli_site = $_POST['cli_site'];
    $cli_email= $_POST['cli_email'];
//    $name = $_POST['name'];
//    $name = $_POST['name'];

    $sql = 'INSERT INTO cliente(
                        cli_nome,
                        cli_cep,
                        cli_rua,
                        cli_cnpj_cpf,
                        cli_numero,
                        cli_cidade,
                        cli_estado,
                        cli_referencia,
                        cli_cel,
                        cli_bairro,
                        cli_tel,
                        cli_site,
                        cli_email
                        ) 
                    VALUES(
                        :name,
                        :cli_cep,
                        :cli_rua,
                        :cli_cnpj_cpf,
                        :cli_numero,
                        :cli_cidade,
                        :cli_estado,
                        :cli_referencia,
                        :cli_cel,
                        :cli_bairro,
                        :cli_tel,
                        :cli_site,
                        :cli_email
                        
                        )';

    $statement = $conn->prepare($sql);
    if ($statement->execute([

        ':name' => $name,
        ':cli_cep' => $cli_cep,
        ':cli_rua' => $cli_rua,
        ':cli_cnpj_cpf' => $cli_cnpj_cpf,
        ':cli_numero' => $cli_numero,
        ':cli_cidade' => $cli_cidade,
        ':cli_estado' => $cli_estado,
        ':cli_referencia' => $cli_referencia,
        ':cli_cel' =>$cli_cel,
        ':cli_bairro'=>$cli_bairro,
        ':cli_tel'=>$cli_tel,
        ':cli_site'=>$cli_site,
        ':cli_email'=>$cli_email,


    ])) {
        $message = 'Categoria cadastrada';
    }
}
?>
<?php require '../base/header.php'; ?>
    <div class="container">
    <div class="card mt-5">
    <div class="card-header">
        <h2>Cadastro Cliente</h2>
    </div>
    <div class="card-body">
        <?php if(!empty($message)): ?>
            <div class="alert alert-success">
                <?= $message; ?>
            </div>
        <?php endif; ?>
        <form method="post">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cli_tel">Telefone</label>
                    <input type="text" name="cli_tel" id="cli_tel" class="form-control" oninput="mascara(this, 'tel')">
                </div>
                <div class="form-group col-md-6">
                    <label for="cli_cel">Celular</label>
                    <input type="text" name="cli_cel" id="cli_cel" class="form-control"  oninput="mascara(this, 'tel')">
                </div>
                <div class="form-group col-md-6">
                    <label for="cli_email">E-mail</label>
                    <input type="email" name="cli_email" id="cli_email" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="cli_site">Site</label>
                    <input type="text" name="cli_site" id="cli_site" class="form-control">
                </div>
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
                    <input type="number" class="form-control" id="cli_cnpj_cpf" placeholder="CNPJ" name="cli_cnpj_cpf" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="c-cidade" >CEP</label>

                    <div class="input-group  ">
                        <input class="form-control" name="cli_cep" type="text" id="cli_cep" value="" size="10"  maxlength="10" OnKeyPress="formatar('#####-###', this)"
                               onblur="pesquisacep(this.value);" />

                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-search"></i></div>
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label for="c-cidade">Cidade</label>
                    <input type="text" class="form-control" id="cli_cidade" placeholder="" name="cli_cidade">
                </div>
                <div class="form-group col-md-3">
                    <label for="c-cidade">Rua</label>
                    <input type="text" class="form-control" id="cli_rua" placeholder="" name="cli_rua">
                </div>


                <div class="form-group col-md-2">
                    <label for="c-numero">Numero</label>
                    <input type="number" class="form-control" id="cli_numero" placeholder="" name="cli_numero">
                </div>

                <div class="form-group col-md-2">
                    <label for="c-bairro">Bairro</label>
                    <input type="text" class="form-control" id="cli_bairro" name="cli_bairro" placeholder="">
                </div>





                <div class="form-group col-md-2">
                    <label for="c-estado">Estado</label>

                    <input type="text" class="form-control" id="cli_estado" placeholder="" name="cli_estado">
                </div>
                <div class="form-group col-md-12">
                    <label for="c-bairro">Referencia</label>
<!--                    <input type="text" class="form-control" id="cli_referencia" placeholder="" name="cli_referencia">-->
                    <textarea class="form-control" id="cli_referencia" placeholder="" name="cli_referencia"  rows="3"></textarea>
                </div>




            </div>


            <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
        </form>



    </div>
    <!--script de  trazer o cep-->
    <script type="text/javascript" >

        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('cli_rua').value=("");
            document.getElementById('cli_bairro').value=("");
            document.getElementById('cli_cidade').value=("");
            document.getElementById('cli_estado').value=("");

        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('cli_rua').value=(conteudo.logradouro);
                document.getElementById('cli_bairro').value=(conteudo.bairro);
                document.getElementById('cli_cidade').value=(conteudo.localidade);
                document.getElementById('cli_estado').value=(conteudo.uf);

            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if(validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('cli_rua').value="...";
                    document.getElementById('cli_bairro').value="...";
                    document.getElementById('cli_cidade').value="...";
                    document.getElementById('cli_estado').value="...";


                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };

    </script>
    <!--    final cep-->

    <!-- Inicio do formulario -->
    <form method="get" action=".">
        <!--        <label>Cep:-->
        <!--            <input name="cep" type="text" id="c-cep" value="" size="10" maxlength="9"-->
        <!--                   onblur="pesquisacep(this.value);" /></label><br />-->
        <!--        <label>Rua:-->
        <!--            <input name="rua" type="text" id="c-rua" size="60" /></label><br />-->
        <!--        <label>Bairro:-->
        <!--            <input name="bairro" type="text" id="c-bairro" size="40" /></label><br />-->
        <!--        <label>Cidade:-->
        <!--            <input name="cidade" type="text" id="c-cidade" size="40" /></label><br />-->
        <!--        <label>Estado:-->
        <!--            <input name="uf" type="text" id="c-uf" size="2" /></label><br />-->
        <!--        <label>IBGE:-->
        <!--            <input name="ibge" type="text" id="c-ibge" size="8" /></label><br />-->
    </form>




    <script type="text/javascript" >
        function mascara(i,t){

            var v = i.value;


            if(t == "cpf"){
                i.setAttribute("maxlength", "14");
                if (v.length == 3 || v.length == 7) i.value += ".";
                if (v.length == 11) i.value += "-";
            }

            if(t == "cnpj"){
                i.setAttribute("maxlength", "18");
                if (v.length == 2 || v.length == 6) i.value += ".";
                if (v.length == 10) i.value += "/";
                if (v.length == 15) i.value += "-";
            }

            if(t == "cep"){
                i.setAttribute("maxlength", "9");
                if (v.length == 5) i.value += "-";
            }

            if(t == "tel"){
                if(v[0] == 9){
                    i.setAttribute("maxlength", "10");
                    if (v.length == 5) i.value += "-";
                }else{
                    i.setAttribute("maxlength", "9");
                    if (v.length == 4) i.value += "-";
                }
            }

        }

    </script>



<?php require '../base/footer.php'; ?>