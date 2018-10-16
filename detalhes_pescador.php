<!DOCTYPE html>
<html>
<head>
  <title>Detalhes Do Pescador</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/detalhes.css">
</head>
<body>
  <?php
  require 'cabeçalho.php';
  require_once 'bd/conexao.php';
  ?>
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;margin-top:200%;">

    <!-- The Grid -->
  

      <!-- Left Column -->
      <div class="w3-third">

         
<!--               ----------------------------------------foto---------------------------------------------------------------
-->              
<body>
      <br>
      <br>
      <br>
      <h1>Detalhes Do Pescador</h1>

     
        <?php
        if (isset($_GET['id'])){
          $pescador_id = $_GET['id'];
        }
        $stmt = $conn->query("SELECT *
           FROM pescadores
          INNER JOIN estado_civil ON pescadores.pescador_id = estado_civil.id_estado WHERE pescador_id = '$pescador_id'");

        $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {

          $pescador_id = $dados['pescador_id'];
          $matricula=$dados['matricula'];
          $nome=$dados['nome'];
          $cpf = $dados['cpf'];
          $endereco = $dados['endereco'];
          $bairro = $dados['bairro'];
          $estado = $dados['estado'];
          $cpf = $dados['cpf'];
          $titulo = $dados['titulo'];
          $profissional = $dados['profissional'];
          $pis = $dados['pis'];
          $rg = $dados['rg'];
          $orgao = $dados['orgao'];
          $nascimento = $dados['nascimento'];
          $rgp = $dados['rgp'];
          $nome_pai = $dados['nome_pai'];
          $nome_mae = $dados['nome_mae'];
          $dependete = $dados['dependente'];
          $data_ins = $dados['data_ins'];
          $insc_inss = $dados['insc_inss'];
          $arquivo = $dados['ARQUIVO'];

          $entry = base64_encode($arquivo);
          ?>

          <div class='col-sm-6 col-md-4'>

            <div class='thumbnail'>

              <img src="data:image/jpeg;base64,<?= $entry ?>" class="img-responsive" style="width:300%;height:400px;">            
            </div>
          </div>
          <br>
          <strong>matricula
          </strong><p><i class="fa fa-check"></i>
            <?php  echo($matricula);?></p>
            <strong>
            nome</strong><p><i class="fa fa-user"></i>
              <?php  echo($nome);?></p>
              <strong>
              endereco</strong><p><i class="fa fa-home"></i>
                <?php echo ($endereco); ?></p>
                <strong>
                bairro</strong><p><i class="fa fa-flag"></i>
                  <?php echo ($bairro); ?></p>
                  <strong>
                  estado</strong><p><i class="fa fa-globe"></i>
                    <?php echo ($estado); ?></p>
                    <strong>
                    cpf</strong><p><i class="fa fa-lock"></i>
                      <?php echo ($cpf); ?></p>
                      <strong>
                      titulo</strong><p><i class="fa fa-credit-card"></i>
                        <?php echo ($titulo); ?></p>
                        <strong>
                        profissional</strong><p><i class="fa fa-book"></i>
                          <?php echo ($profissional); ?></p>
                          <strong>
                          pis</strong><p><i class="fa fa-book"></i>
                            <?php echo ($pis); ?></p>
                            <strong>
                            rg</strong><p><i class="fa fa-lock"></i>
                              <strong>
                              orgao</strong><p><i class="fa fa-flag"></i>
                                <?php echo ($orgao); ?></p>
                                <strong>
                                nascimento</strong><p><i class="fa fa-heart"></i>
                                  <?php echo ($nascimento); ?></p>
                                  <strong>
                                  rgp</strong><p>
                                    <?php echo ($rgp); ?></p><i class="fa fa-book"></i>
                            <?php echo ($pis); ?></p>
                                    <strong>
                                    nome_pai</strong><p>
                                      <?php echo ($nome_pai); ?></p><i class="fa fa-user"></i>
                                      <strong>
                                      nome_mae</strong><p><i class="fa fa-user"></i>
                                        <?php echo ($nome_mae); ?></p>
                                        <strong>
                                        dependete</strong><p><i class="fa fa-user"></i>
                                          <?php echo ($dependete); ?></p><i class="fa fa-book"></i>
                                          <strong>
                                          data_ins</strong><p>
                                            <?php echo ($data_ins); ?></p><i class="fa fa-book"></i>
                                            <strong>
                                            insc_inss</strong><p>
                                              <?php echo ($insc_inss); ?></p>
                                              <?php
                                            }
                                            ?>
                                            
                                         
                                        </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                               </div>

                              

                                <div class="w3-container w3-card w3-white w3-margin-bottom"><br>
                                  <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-pencil-square-o"></i>Anotações sobre o Pescador</h2>


                                  <div class="container">

                                    <div><p>DEIXE AQUI SEU COMENTÁRIO</p></div>
                                    <?php 
                                    if (isset($_GET['id'])){
                                      $pescador_id = $_GET['id'];
                                    }


                                    ?>
                                    <form action="add-comentario_p.php?id=<?=$pescador_id?>" method="post">
                                      <div class="form-row">
                                        <div class="form-group col-sm-7">
                                          <label>Nome</label>
                                          <input class="form-control" rows="2" id="nome" placeholder="Nome" name="nomeComent"></input>
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-sm-7">
                                          <label>Comentário</label>
                                          <textarea class="form-control" rows="2" id="comment" placeholder="Escreva um comentário..." name="coment"></textarea>
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-sm-12">
                                          <input type="hidden" name="acao" value="preenchido"/>
                                          <button class="btn" type="submit">COMENTAR</button>
                                        </div>

                                      </form>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <p>COMENTÁRIOS</p>
                                    <?php
                                    $id = $_GET['id'];

                                    $query = "SELECT * FROM TB_COMENTARIO_p, pescadores WHERE pescadores.pescador_id = '$id' AND TB_COMENTARIO_p.pescador_id = $id ORDER BY COM_ID DESC LIMIT 6";
                                    $stmt = $conn->prepare($query);
                                    $res = $stmt->execute();
                                    $rows = $stmt->rowCount();
                                    if($rows <= 0){
                                      echo"<div>Seja o primeiro a comentar!</div>";
                                    } else {
                                      ?>

                                      <?php
                                      while($campos = $stmt->fetch(PDO::FETCH_ASSOC)){
                                       $id=$campos['COM_ID'];
                                       $name=$campos['COM_NOME'];
                                       $_comentario=$campos['COM_COMENTARIO'];
                                       ?>
                                       <div class="form-row" id="div-comentario">
                                        <div class="form-group col-sm-7">
                                          <p>NOME: <?php echo $name; ?></p>
                                          <p>COMENTÁRIO: <?php echo $_comentario; ?></p>
                                        </div>
                                      </div>
                                      <?php
                                    }
                                  }
                                  ?>

                                </div>

                                <br>

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
                      </div>

                      <?php include 'rodape.php'; ?>
                    </body>
                    </html>