<?php
include "menu.php";
include '../segurança/cabecalho_seguro.php';
include 'menu_lateral.php';

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilopesquisar.css">
  <title>pesquisar</title>
</head>

</html>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<form action="pesquisar.php" method="POST" id='form-contato' class="form-horizontal col-md-10">
    <label class="col-md-2 control-label" for="termo">Pesquisar</label>
    <div class='col-md-7'>
        <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Infome o Nome do produto" required/>
    </div>
    <button type="submit" class="btn btn-primary">Pesquisar</button>
    <a href='armazenamento_itens.php' class="btn btn-primary">Ver Todos</a>
</form>

<a href='cadastro_produto.php' class="btn btn-success pull-right">Cadastrar Novo Produtos</a>
<div class='clearfix'></div>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<?php
// Monta outra consulta MySQL para a busca
$buscar = $_POST['pesquisa'];

$data = $conn->query("SELECT * FROM pescadores WHERE nome LIKE '%".$buscar."%'");


echo "<table border=0 align=center width=800px>";
echo"

<tr>
<th>Nome </th>
<th>Quantidade</th>
<th>Preço</th>
<th>Categoria</th>

</tr>";
foreach($data as $row) {
  echo "
  <tr>
  <td>".$row['nome']."</td>
  <td>".$row['relato']."</td>
  <td>$".$row['nome_receptor  ']." </td>

  </tr>
  ";
}
echo "</table>";
?>