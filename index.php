<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/index.css">
</head>

<?php
require_once "cabeçalho.php";
?>
<body>
 <!-- Page Content -->
 <div class="col-md-4">

  <!-- Categories Widget -->
  <br>
  <br>
  <br>
  <div class="card my-4">
    <button class="btn btn-blue">Institucional</button>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#">História</a>
            </li>
            <li>
              <a href="#">Infraestrutura</a>
            </li>
            <li>
              <a href="#">Nossa equipe</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#">Diretoria Atual</a>
            </li>
            <li>
              <a href="#">Regimento</a>
            </li>
            <li>
              <a href="#">Estatuto</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card my-4">
      <button class="btn btn-blue">Área Restrita</button>
      <div class="card-body">
        <?php if($_SESSION['logado'] == True): ?>
          <li><a href="cadastro_pescadores.php">Cadastre Um Novo Pescador</a></li>
          <li><a href="armazenamento.php">Listar Todos Pescadores</a></li>
          <li><a href="escrever-noticias.php">Cadastre Uma Nova Noticia</a></li>
          <li><a href="index-assoc.php">Listar Todas As Noticias</a></li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</div>
</div>

<div class="col-md-8">
  <br>
  <br>
  <br>
  <br>
  <h2 class="card-title">Últimas Notícias</h2>
</h1>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/20.jpeg" class="img-responsive" style="width:100%;height:400px";>
    </div>



    <?php
    $sql = "SELECT ARQUIVO, TITULO, ID_NOT FROM TB_NOTICIAS WHERE PUBLICADO = '1' ORDER BY DATA DESC LIMIT 3";

    $stmt = $conn->prepare($sql);
    $res = $stmt->execute();
    $rows = $stmt->rowCount();

    if ($rows <=0) {
    } else{         

      ?>
      <?php 

      while ($campos = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $campos['ID_NOT'];
        $titulo = $campos['TITULO'];
        $arquivo = $campos['ARQUIVO'];
        $entry = base64_encode($arquivo);

        ?>
        <div class="carousel-item">
          <a href="not.php?id=<?=$id?>"><img src="data:image/jpeg;base64,<?= $entry ?>" class="img-responsive" style="width:100%;height:400px;"></a>
          <h3 style="font-size: 25px margin-right:0;"><?php echo $titulo ?></h3>            
        </div>       

        <?php
      }
    }
    ?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div>
<br>
<br>
<?php
$sql = "SELECT ARQUIVO, TITULO, TEXTO, ID_NOT, SUBTITULO FROM TB_NOTICIAS WHERE PUBLICADO = '1' ORDER BY DATA DESC LIMIT 6";

$stmt = $conn->prepare($sql);
$res = $stmt->execute();
$rows = $stmt->rowCount();

if ($rows <=0) {

} else{         

  ?>
  <div class="row">
    <?php 
    while ($campos = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $id = $campos['ID_NOT'];
      $titulo = $campos['TITULO'];
      $arquivo = $campos['ARQUIVO'];
      $texto = $campos['TEXTO'];
      $subtitulo = $campos['SUBTITULO'];

      $rest = substr($texto, 0, 300);

      $entry = base64_encode($arquivo);

      ?>


      <!-- <div class="not"> -->
        <div class="col-md-6">
          <div>
            <h4 class="titulo-h4"><?php echo $titulo ?></h4>
            <p class="text-index"><?php echo $subtitulo ?></p>
          </div>
          <div>
            <a href="not.php?id=<?=$id?>"><img src="data:image/jpeg;base64,<?= $entry ?>" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
            <p class="text-index"><?php echo $rest ?><a href="not.php?id=<?=$id?>"> Saiba mais...</a></p>
            <hr>
          </div>
        </div>

        <!-- </div> -->
        <?php
      }
      echo "</div>";
    }
    ?>


  </div>
</div>      
<?php
require_once "rodape.php";
?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>