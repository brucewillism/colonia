  <?php
  require 'cabeçalho.php';
  require_once 'bd/conexao.php';
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Detalhes Do Pescador</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1010px; margin-right:300px; margin-left:30px;text-align: center">

<!--               ----------------------------------------foto---------------------------------------------------------------
-->
<br>
<br>
<h2 class="w3-text-grey w3-padding-16" style="margin-left:300px;"><i class="fa fa-pencil-square-o"></i>Detalhes sobre o Pescador</h2>
<?php
if (isset($_GET['id'])){
  $pescador_id = $_GET['id'];
}
$stmt = $conn->query("SELECT *
 FROM pescadores
 INNER JOIN estado_civil ON pescadores.id_estado = estado_civil.id_estado
 WHERE pescador_id = '$pescador_id'");

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
  $data_cat = $dados["data_cat"];
  $cei = $dados["cei"];
  $nit = $dados["nit"];
  $embarcacao = $dados["embarcacao"];
  $nivel = $dados["nivel"];
  $situacao = $dados["situacao"];

  $entry = base64_encode($arquivo);
  ?>

  <div class='col-sm-6 col-md-2'>

    <div class='thumbnail'>

      <img src="data:image/jpeg;base64,<?= $entry ?>" class="img-responsive" style="width:200%;height:auto; margin-top:10px; margin-left:500px; ">            
    </div>
  </div>

  <div class="bg-info text-white text-center py-2 " style="width:50%;height:300%; margin-top:35px; margin-left:20px;">
    <p class="m-0">Dados pessoais do Pescador</p>
  </div>
  <br>
  <br>
  <div class="form-group">
    <div class="input-group mb-2" style ="margin-top:10px;">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i> Numero Da Matricula</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:800px; margin-top:10px;" value="<?php echo ($matricula); ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2" style ="margin-top:-90px; margin-right:300px; margin-left:250px;">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Nome</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:550px; margin-top:10px;"  value="<?php echo ($nome); ?>"> 
    </div>
  </div>

  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Endereço</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:780px; margin-top:10px;" value="<?php echo ($endereco); ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2" style ="margin-top:-90px; margin-right:300px; margin-left:250px;">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Bairro</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:800px; margin-top:10px;margin-left:-10px; " value="<?php echo ($bairro); ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2" style ="margin-top:-90px; margin-right:300px; margin-left:500px;">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Estado</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:800px; margin-top:10px;" value="<?php echo ($estado); ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Data De Nascimento</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:800px; margin-top:10px;" value="<?php echo ($nascimento); ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2" style ="margin-top:-90px; margin-right:300px; margin-left:250px;">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>RG</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:700px; margin-top:10px;" value="<?php echo ($rg); ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Órgão Expedidor</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:800px; margin-top:10px;" value="<?php echo ($orgao); ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2" style ="margin-top:-90px; margin-right:600px; margin-left:250px;">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>CPF</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:800px; margin-top:10px;" value="<?php echo ($cpf); ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Titulo</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:800px; margin-top:10px;" value="<?php echo ($titulo); ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2" style ="margin-top:-90px; margin-right:800px; margin-left:250px;">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Carteira Profissional</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:700px; margin-top:10px;" value="<?php echo ($profissional); ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Estado Civil</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:800px; margin-top:10px;" value="<?php echo ($dados['nome_est']); ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2" style ="margin-top:-90px; margin-right:300px; margin-left:250px;">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Nome Do Pai</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:300px; margin-top:10px;" value="<?php echo ($nome_pai); ?>"> 
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Nome Da Mae</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:620px; margin-top:10px;" value="<?php echo ($nome_mae); ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2" style ="margin-top:-90px; margin-right:300px; margin-left:450px;">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Nomes Dos Dependentes</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:500px; margin-top:10px;" value="<?php echo ($dependete); ?>">            
    </div>
  </div>
</div>
<div class="w3-content w3-margin-left" style="max-width:1010px; margin-right:300px; margin-left:200px;text-align: center">
  <div class="bg-info text-white text-center py-2 " style="width:50%;height:300%; margin-top:-727px; margin-left:800px;">
    <p class="m-0">Dados Profissionais do Pescador</p>
  </div>
  
  <div class="form-group">
    <div class="input-group mb-2"  style ="margin-top:-90px; margin-right:300px; margin-left:500px;margin-top:68px;">
      <div class="input-group-prepend">

      </div>
    </div>
  </div>
  <br>
  <br>
  <br>

  <div class="form-group">
    <div class="input-group mb-2" style ="margin-top:-90px; margin-right:300px; margin-left:800px;">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Data De Inscricão</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:800px; margin-top:20px; margin-left:5px;" value="<?php echo ($data_ins); ?>">
    </div>
  </div>



  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Data De Inscricão</div>
      </div>
      <input class="form-control" name="data_ins" placeholder="Digite a Data de Inscricão"  value="<?php echo ($data_ins); ?>" >
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Data Da Carteira De Pesca</div>
      </div>
      <input class="form-control" id="data1" name="data_cat" value="<?php echo ($data_cat); ?>"  placeholder="Digite a Data da carteora de Pesca">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>NIT</div>
      </div>
      <input class="form-control" name="nit" value="<?php echo ($nit); ?>" placeholder="Digite o NIT">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>CEI</div>
      </div>
      <input class="form-control" name="cei" value="<?php echo ($cei); ?>"  placeholder="Digite o CEI"required>
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Data do inss</div>
      </div>
      <input class="form-control" id="data3" name="data_ins" value="<?php echo ($data_ins); ?>"  placeholder="Digite o Data do inss"required>
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Embarcação</div>
      </div>
      <input class="form-control" name="embarcacao" value="<?php echo ($embarcacao); ?>"  placeholder="Digite o Nome da Embarcação"required>
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Nivel De Estudo</div>
      </div>
      <input class="form-control"  name="nivel" value="<?php echo ($nivel); ?>"  placeholder="Digite o Nivel de Estudo">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Situação</div>
      </div>
      <select name="situacao">
        <option value="aposentado">Aposentado</option>
        <option value="ativo">Ativo</option>
        <option value="faleceu">Faleceu</option>
        <option value="transfirido">Transfirido</option>
        <option value="ausente">Ausente</option>
      </select>
    </div>
  </div>       





  <div class="form-group">
    <div class="input-group mb-2" style ="margin-top:-90px; margin-right:300px; margin-left:1050px;margin-top:20px; ">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>RGP</div>
      </div>
      <input class="form-control" style="width:200%;height:200%; margin-right:800px; margin-top:15px;" value="<?php echo ($rgp); ?>">
    </div>
  </div>
  <?php
}
?>   
<div class="form-group">
  <div class="input-group mb-2"  style ="margin-top:-90px; margin-right:300px; margin-left:810px;margin-top:-100px; ">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-user fa text-info " ></i>PIS</div>
    </div>
    <input class="form-control" style="width:200%;height:200%; margin-right:800px; margin-top:20px; margin-left:5px;" value="<?php echo ($pis); ?>">
  </div>
</div>                            
</div>
</div>
<br>
<br>
<div class="w3-container w3-card w3-white w3-margin-bottom" style="max-width:1000px; margin-right:300px; margin-left:20px; margin-top:420px;">
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
<center>
  <input type="button" value="Imprimir" onClick="window.print()" value="Imprimir" id="btncad">
</center>
</div>
<?php include 'rodape.php'; ?>
</body>
</html>