<?php include 'cabeçalho.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>pesquisar</title>
</head>

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
// Monta outra consulta MySQL para a busca
  $buscar = $_POST['pesquisa'];

  $stmt = $conn->query("SELECT *
    FROM pescadores
    INNER JOIN categorias ON pescadores.id = categorias.id WHERE nome LIKE '%".$buscar."%'");
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
</table><a class="btn btn-secondary" href='armazenamento.php'>Voltar</a>
