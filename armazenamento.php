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

    <div class="card my-4">
        <h5 class="card-header">Pesquisar</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Pesquisar</button>
                    <a class="btn btn-secondary" href='cadastro_pescadores.php'>Novo Pescadores</a>
                    <a class="btn btn-secondary" href='cadastro_pescadores_caicara.php'>Novo Pescadores Caicara</a>
                </span>
            </div>
        </div>
    </div>
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
    <?php
    include 'rodape.php';
    ?>
</body>
</html>