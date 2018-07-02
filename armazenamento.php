<?php
include "cabeçalho.php";
require "cabecalho_seguro.php";


?>
<!DOCTYPE html>
<html>
<head>
    <title>Colonia</title>
    <meta charset="utf-8">
</head>
<body>

    <table class="table">
        <tr>
            <th>Nome </th>
            <th>CPF</th>
            <th>endereco</th>
            <th>Bairro</th>
            <th>Deletar</th>
            <th>Editar</th>
            <th>Detalhes</th>
        </tr>
        <?php

        require_once 'bd/conexao.php';

        $stmt = $conn->query('SELECT * FROM pescadores');
        $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {

        $id = $dados['id'];
        $nome=$dados['nome'];
        $cpf = $dados['cpf'];
        $endereco = $dados['endereco'];
        $bairro = $dados['bairro'];
        echo "<tr>
        <td> "."$nome"."</td>
        <td>"."$cpf"."</td>
        <td>"."$endereco"."</td>
        <td>"."$bairro"."</td>
        <td><a  href='bd/excluir.php?id=".$id."'>Excluir</a></td>
        <td><a  href='formulario_editar.php?id=".$id."'>Editar</a></td>

        </tr>";
        }
        ?>
    </table>
</body>
</html>