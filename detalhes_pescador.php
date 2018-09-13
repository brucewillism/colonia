<!DOCTYPE html>
<html>
<title>Página do Usuário</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body class="w3-light-grey">
  <div>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/
    jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/
    bootstrap.min.js"></script>
    <title>Colonia De Pescadores Z-10</title>
  </head>
  <body>

    <?php
    if (isset($_GET['id'])){
      $id = $_GET['id'];
    }
    require 'cabeçalho.php';
    require_once 'bd/conexao.php';
    ?>
    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

      <!-- The Grid -->
      

        <!-- Left Column -->
        <div class="w3-third">

          <div class="w3-white w3-text-grey w3-card-4">
            <div class="w3-display-container" >

<!--               ----------------------------------------foto---------------------------------------------------------------
-->              
<?php
// Incluindo arquivo de conexão
require_once('config/conn.php');
include 'cadastro.php';
// Selecionando fotos
if (isset($_GET['id'])){
  $id = $_GET['id'];
}

$stmt = $pdo->query("SELECT id, nome, tipo, tamanho FROM fotos WHERE 'id_pescador' = '$id'");

$cadastro = $stmt->fetchAll();

foreach ($cadastro as $dados) {
  $id = $dados['id'];
  $nome=$dados['nome'];
  $tipo = $dados['tipo'];
  $tamanho = $dados['tamanho'];

}

echo "<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' media='all' href='css/main.css'/>
</head>

<body>
<div class='container'>
<div class='row'>


<div class='col-sm-6 col-md-4'>

<div class='thumbnail'>

<img src='imagem.php?id=<?php echo $id ?>' />

<div class='caption'>";
?>

<?php
if (isset($_GET['id'])){
  $id = $_GET['id'];
}

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

  echo "<div class='w3-container'>
  <strong>Nome:</strong><p><i class='fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal'></i><?php echo $cadastro->nome ?></p>
  <strong>Endereço:</strong><p><i class='fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal'></i><?php echo $cadastro->edereco ?></p>
  <strong>Cidade:</strong><p><i class='fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal'></i><?php echo $cadastro->cidade ?></p>
  <strong>Rgp:</strong><p><i class='fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal'></i><?php echo $cadastro->rgp ?></p>
  <strong>Categoria:</strong><p><i class='fa fa-home fa-fw w3-margin-right w3-large w3-text-teal'></i><?php echo $cadastro->categoria ?></p>
  <p class='w3-large'><b><i class='fa fa-asterisk fa-fw w3-margin-right w3-text-teal'></i>Resumo</b></p>
  <p>Apresentações</p>
  <div class='w3-light-grey w3-round-xlarge w3-small'>
  <div class='w3-container w3-center w3-round-xlarge w3-teal' style='width:90%'>90%</div>
  </div>
  <p class='w3-large w3-text-theme'><b><i class='fa fa-globe fa-fw w3-margin-right w3-text-teal'></i>Experiência</b></p>
  <p>Pesca</p>
  <div class='w3-light-grey w3-round-xlarge'>
  <div class='w3-round-xlarge w3-teal' style='height:24px;width:100%'></div>
  </div>
  <p>Vendas</p>
  <div class='w3-light-grey w3-round-xlarge'>
  <div class='w3-round-xlarge w3-teal' style='height:24px;width:55%'></div>
  </div>
  <p>Produtos</p>
  <div class='w3-light-grey w3-round-xlarge'>
  <div class='w3-round-xlarge w3-teal' style='height:24px;width:25%'></div>
  </div>";
}
?>
</div>
</div>
</div>

</div>

</div>
</div>

</div>
</div>
<!-- End Left Column -->
</div>

<!-- Right Column -->
<div class="w3-twothird" style="max-width:1400px; margin-left: 35%;">

  <div class="w3-container w3-card w3-white w3-margin-bottom">
    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Detalhes Do Pescador</h2>

    <div class="container">    
      <form method="post">
        <div class="form-group">
          <label for="comment">Descrição:</label>
          <textarea class="form-control" rows="5" id="comment" style="width: 50%;"></textarea>
        </div>
        <a  target='_blank' href="index.php" data-placement="top" title="Enviar"><i class="fa fa-check-circle fa-1x"></i></a>

        <a  target='_blank' href="index.php" data-placement="top" title="Editar"><i class="fa fa-edit fa-1x"></i></a>
      </form>
    </div>


    <div class="w3-container">
      <h5 class="w3-opacity"><b>Em definição</b></h5>
      <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
      <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
      <hr>
    </div>
    <div class="w3-container">
      <h5 class="w3-opacity"><b>Em definição</b></h5>
      <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
      <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
      <hr>
    </div>
    <div class="w3-container">
      <h5 class="w3-opacity"><b>Em definição</b></h5>
      <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
    </div>
  </div>

</div>

</div>  
</div>
<?php include 'rodape'; ?>
</body>
</html>