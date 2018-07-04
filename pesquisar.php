<?php
include "cabeçalho.php";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>pesquisar</title>
</head>
<?php
// Monta outra consulta MySQL para a busca
$buscar = $_POST['pesquisa'];

$data = $conn->query("SELECT * FROM pescadores WHERE nome LIKE '%".$buscar."%'");

$data1 = $conn->query("SELECT * FROM pescadores_caicaras WHERE nome LIKE '%".$buscar."%'");


echo "<table class='table' border='1px'";
echo"
        <tr>
            <th>Nome </th>
            <th>CPF</th>
            <th>endereco</th>
            <th>Bairro</th>
            <th>Deletar</th>
            <th>Editar</th>
            <th>Detalhes</th>
</tr>";
foreach($data as $row) {
  echo "
  <tr>
  <td>".$row['nome']."</td>
  <td>".$row['cpf']."</td>
  <td>".$row['endereco']." </td>
  <td>".$row['bairro']."</td>
  <td><a  href='bd/excluir.php?id=".$id."'>Excluir</a></td>
  <td><a  href='editar.php?id=".$id."'>Editar</a></td>
  <td><button style='color:#337ab7;'data-toggle='modal' data-target='#myModal'>Detalhes</button></td>

  </tr>
  ";
}foreach($data1 as $row) {
  echo "
  <tr>
  <td>".$row['nome']."</td>
  <td>".$row['cpf']."</td>
  <td>".$row['endereco']." </td>
  <td>".$row['bairro']."</td>
  <td><a  href='bd/excluir.php?id=".$id."'>Excluir</a></td>
  <td><a  href='editar.php?id=".$id."'>Editar</a></td>
  <td><button style='color:#337ab7;'data-toggle='modal' data-target='#myModal'>Detalhes</button></td>

  </tr>
  ";
}
echo "</table>";
?>
<a class="btn btn-secondary" href='armazenamento.php'>Voltar</a>
