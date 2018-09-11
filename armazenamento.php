<?php
require_once "cabeçalho.php";
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
                <form action="pesquisar.php" method="POST">
                    <input type="text" name="pesquisa" placeholder="Pesquise Aqui..." required>
                    <span class="input-group-btn">
                        <input class="btn btn-secondary" type="submit" value="pesquisar"></input>
                        <a class="btn btn-secondary" href='cadastro_pescadores.php'>Cadastre Um Novo Pescador</a>
                    </span>
                </form>
            </div>
        </div>
    </div>
  
  <table class="table" border="1px" style="background: #C0C0C0;">
        <tr>
            <th>Nome </th>
            <th>CPF</th>
            <th>Endereco</th>
            <th>Bairro</th>
            <th>Deletar</th>
            <th>Editar</th>
            <th>Detalhes</th>
        </tr>
    <?php
    require_once 'bd/conexao.php';
    
    // $id_user = $_SESSION['UsuarioID'];

    $stmt = $conn->query("SELECT *
FROM pescadores
INNER JOIN categorias ON pescadores.id = categorias.id");
     $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {
            $id = $dados['id'];
            $nome=$dados['nome'];
            $cpf = $dados['cpf'];
            $endereco = $dados['endereco'];
            $bairro = $dados['bairro'];
            echo "<tr>
            <td>"."$nome"."</td>
            <td>"."$cpf"."</td>
            <td>"."$endereco"."</td>
            <td>"."$bairro"."</td>
            <td><a  href='bd/excluir.php?id=".$id."'>Excluir</a></td>
            <td><a  href='formulario_editar.php?id=".$id."'>Editar</a></td>
            <td><a  href='detalhes_pescador.php?id=".$id."' >Mais detalhes</a></td>
            </tr>";
        }
    ?>
</table>
</body>
</html>