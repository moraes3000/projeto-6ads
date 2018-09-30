<?php

include ('../../template/geral/conexao.php');
$delete = "DELETE FROM `categoria` WHERE `categoria`.`cat_id` = $id";