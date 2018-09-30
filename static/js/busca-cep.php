<!-- Adicionando Javascript -->
<script type="text/javascript" >

    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('cli_rua').value=("");
        document.getElementById('cli_bairro').value=("");
        document.getElementById('cli_cidade').value=("");
        document.getElementById('cli_estado').value=("");
        document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('cli_rua').value=(conteudo.logradouro);
            document.getElementById('cli_bairro').value=(conteudo.bairro);
            document.getElementById('cli_cidade').value=(conteudo.localidade);
            document.getElementById('cli_estado').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
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
                document.getElementById('ibge').value="...";

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

<!-- Inicio do formulario -->
<form method="post" action="../../template">
    <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
    <label>Rua:
        <input name="cli_rua" type="text" id="cli_rua" size="60" /></label><br />
    <label>Bairro:
        <input name="cli_bairro" type="text" id="cli_bairro" size="40" /></label><br />
    <label>Cidade:
        <input name="cli_cidade" type="text" id="cli_cidade" size="40" /></label><br />
    <label>Estado:
        <input name="cli_estado" type="text" id="cli_estado" size="2" /></label><br />
    <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="8" /></label><br />
</form>
</body>

</html>