    <?php
//    include '../../template/header.php';
    include ('../../template/geral/conexao.php');
    $pesquisa = $_GET['pesquisa'];
    $pesquisa2 = $_GET['pesquisa2'];
    $produto = "SELECT *FROM `produto` WHERE pro_nome LIKE '%$pesquisa%'";


    $delete = "DELETE FROM `categoria` WHERE `categoria`.`cat_id` = 17";

    echo $pesquisa;
    $result = $conn->query($produto);?>


<div class="container">
    <div class="row mt-5 pt-5" >
        <form method="GET">
            <label for="consulta">Buscar:</label>
            <input type="text" name="pesquisa" placeholder="pesquisa">

            <input type="submit" value="enviar" />
        </form>
    </div>

    <table class="table table-striped table-bordered  table-hover">


        <thead class="thead-dark">

        <tr>
             <th scope="col">Cod</th>
            <th scope="col">Nome</th>
            <th scope="col">Foto</th>
            <th scope="col">Quantidade Estoque Atual</th>

            <th scope="col">Ação</th>
        </tr>




        </thead>
        <?php while ($row = $result->fetch_row()) {?>

            <tr>
                <td scope="row"><?php   echo $row[0];?></td>
                <td scope="row"><?php   echo $row[1];?></td>
                <td scope="row"><?php   echo $row[3];?></td>
                <td scope="row" class="
                    <?php if($row[4] > $row[5]) {
                        echo 'text-success';
                    }
                    else{
                        echo  'text-danger';
                    } ?>">

                        <?php   echo $row[4];?>
                </td>

                <td>

                    <i class="fas fa-edit ">  <?php   echo $row[0];?></i>
                    <i class="fas fa-trash-alt float-right"></i>
                </td>
            </tr>
        <?php }?>
    </table>



</div>

