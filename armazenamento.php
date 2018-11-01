<?php
require_once "cabeçalho.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Colonia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/armazenamento.css">
</head>
<body>

    <br>
    <br>
    <br>
    <h1>Listagem De Pescadores</h1>
    <br>
    <table id="tabela" class="display" cellspacing="0" width="100%" border="1px" style="background: #C0C0C0">
        <thead>

            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Endereco</th>
                <th>Bairro</th>
                <th>Deletar</th>
                <th>Editar</th>
                <th>Detalhes</th>
            </tr>
        </thead>
        <?php
        require_once 'bd/conexao.php';
        $stmt = $conn->query("SELECT * FROM pescadores 
            INNER JOIN estado_civil ON pescadores.id_estado = estado_civil.id_estado");

        $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {

            $pescador_id = $dados['pescador_id'];
            $nome=$dados['nome'];
            $cpf = $dados['cpf'];
            $endereco = $dados['endereco'];
            $bairro = $dados['bairro'];
            echo "<tr>
            <td>"."$nome"."</td>
            <td>"."$cpf"."</td>
            <td>"."$endereco"."</td>
            <td>"."$bairro"."</td>
            <td><a  href='bd/excluir.php?id=".$pescador_id."'>Excluir</a></td>
            <td><a  href='formulario_editar.php?id=".$pescador_id."'>Editar</a></td>
            <td><a  href='detalhes_pescador.php?id=".$pescador_id."' >Mais detalhes</a></td>
            </tr>";
        }
        ?>
    </table>
</div>
</div>
</div>
<center>
<input type="button" value="Imprimir" onClick="window.print()" value="Imprimir" id="btncad">
</center>
</body>
<?php include 'rodape.php'; ?>
</html>