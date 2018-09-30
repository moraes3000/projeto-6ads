


<form method="POST" action="teste.php">
    <label for="consulta">Buscar:</label>
    <input type="text" name="pesquisa" placeholder="pesquisa">

    <input type="submit" value="enviar" />
</form>

<h1>
    <?php
    include ('../../template/geral/conexao.php');
    $pesquisa = $_POST['pesquisa'];

    $cliente = "SELECT *FROM `produto` WHERE pro_nome LIKE '%$pesquisa%'";
    //SELECT * FROM `produto` WHERE pro_nome LIKE '%mer%'



    echo $pesquisa;
    $result2 = $conn->query($cliente);
    while ($row = $result2->fetch_row()){
        echo $row[0] .'<br>';
        echo $row[1];
    }?>
</h1>