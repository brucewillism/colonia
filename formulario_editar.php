<?php
include 'bd/conexao.php';
include 'cabeçalho.php';
?>
<main>

  <?php
// pega o ID da URL
  $id = isset($_GET['id']) ? (int) $_GET['id'] : null;
    //Valida a variavel da URL
  if (empty($id)){
    echo "ID para alteração não definido";
    exit;
  }

  $sql = "SELECT * FROM pescadores WHERE pescador_id='$id'";
  $result = $conn->prepare($sql);
  $result->bindParam(':id', $id, PDO::PARAM_INT);
  $result->execute();

  $resultado = $result->fetch(PDO::FETCH_ASSOC);
  if(!is_array($resultado)){
    echo "Nunhum dado encontrado";
    exit;
  }
  $arquivo = $resultado['ARQUIVO'];
  $entry = base64_encode($arquivo);

  ?>
  <!doctype html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title>Editar</title>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    

    <script type="text/javascript">
      $(document).ready(function(){  
        $("#data").mask("99/99/9999");
        $("#data1").mask("99/99/9999");
        $("#data3").mask("99/99/9999");
        $("#telefone").mask("(99) 9999-9999");
        $("#indicativoTelefone").mask("+55 (99) 9999 999");
        $("#rg").mask("9.999.999");
        $("#cpf").mask("999.999.999-99");
        $("#titulo").mask("9999.9999.9999");
        $("#profissional").mask("999.999.999-99");
        $("#pis").mask("999.99999.99-9");
        $("#inss").mask("99.999.99999/99");
      });
    </script>
  </head>
  <body>
    <h1>Editar</h1>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">

          <!--Form with header-->
          <br>
          <br>
          <br>
          <form action="editar.php?id=<?=$id?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$id?>">
            <div class="card border-primary rounded-0">
              <div class="card-header p-0">
                <div class="bg-info text-white text-center py-2">
                  <h3><i class="fa fa-user fa" ></i> Editar o Cadastro Do Pescador <?php echo $resultado['nome']; ?></h3>
                  <p class="m-0">Dados Pessoais Do Pescador</p>
                </div>
              </div>
              <div class="card-body p-3">

                <!--Body-->
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i> Foto</div>
                    </div>
                    <input type="file"  class="form-control-file" name="file" id="imgInp">
                    <br>
                    <img id='img-upload' src="data:image/jpeg;base64,<?= $entry ?>" style="width:100%;height:100%;" />

                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i> CADASTRO MAT. N</div>
                    </div>
                    <input class="form-control" name="matricula" placeholder="Digite o Numero Da Matricula"  value="<?php echo $resultado['matricula']; ?>" >

                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Nome</div>
                    </div>
                    <input class="form-control"  name="nome" placeholder="Digite Seu Nome Completo"  value="<?php echo $resultado['nome']; ?>" >

                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"  ></i>Endereço</div>
                    </div>
                    <input class="form-control" name="endereco" placeholder="Digite Seu endereço"  value="<?php echo $resultado['endereco']; ?>" >

                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Bairro</div>
                    </div>
                    <input class="form-control" name="bairro" placeholder="Digite Seu Bairro"  value="<?php echo $resultado['bairro']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Estado</div>
                    </div>
                    <input class="form-control" name="estado" placeholder="Digite Seu Estado"  value="<?php echo $resultado['estado']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Data De Nascimento</div>
                    </div>
                    <input class="form-control" name="nascimento"  placeholder="Digite Sua Data de nascimento"  value="<?php echo $resultado['nascimento']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>RG</div>
                    </div>
                    <input class="form-control" id="rg" class="form-control" name="rg" placeholder="Digite Seu RG"  value="<?php echo $resultado['rg']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Órgão Expedidor</div>
                    </div>
                    <input class="form-control" name="orgao" placeholder="Digite seu Órgão Expedidor"  value="<?php echo $resultado['orgao']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>CPF</div>
                    </div>
                    <input class="form-control" id="cpf" name="cpf" placeholder="Digite Seu CPF" value="<?php echo $resultado['cpf']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Titulo</div>
                    </div>
                    <input class="form-control" id="titulo" name="titulo" placeholder="Digite Seu Titulo"  value="<?php echo $resultado['titulo']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Carteira Profissional</div>
                    </div>
                    <input class="form-control" name="profissional" placeholder="Digite Seu Profissional"  value="<?php echo $resultado['profissional']; ?>" >
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Estado Civil</div>
                    </div>
                    <select name="estado_civil" >
                      <?php
                      include 'bd/conexao.php';
                      $sql = "SELECT * FROM estado_civil";
                      foreach ($conn->query($sql) as $registro) {
                        $id_estado = $registro['id_estado'];
                        $nome = $registro['nome_est'];
                        echo "<option value='".$id_estado."'>".$nome."</option>";
                      }
                      ?>
                    </select>                
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Nome Do Pai</div>
                    </div>
                    <input class="form-control" name="nome_pai" placeholder="Digite o nome do pai"  value="<?php echo $resultado['nome_pai']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Nome Da Mae</div>
                    </div>
                    <input class="form-control" name="nome_mae" placeholder="Digite o nome da mae"  value="<?php echo $resultado['nome_mae']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Nomes Dos Dependentes</div>
                    </div>
                    <input class="form-control" name="dependente" placeholder="ex: esposa, filho1, filho2"required value="<?php echo $resultado['dependente']; ?>" >
                  </div>
                </div>
                <div class="bg-info text-white text-center py-2">
                  <h3><i class="fa fa-user fa " ></i> Cadastro De Pescador <?php echo $resultado['nome']; ?></h3>
                  <p class="m-0">Dados Profissionais Do Pescador</p>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>PIS</div>
                    </div>
                    <input class="form-control" id="pis" class="form-control" name="pis" placeholder="Digite Seu Pis"  value="<?php echo $resultado['pis']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>RGP</div>
                    </div>
                    <input class="form-control" name="rgp" placeholder="Digite Seu RGP"  value="<?php echo $resultado['rgp']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Data De Inscricão</div>
                    </div>
                    <input class="form-control" name="data_ins" placeholder="Digite a Data de Inscricão"  value="<?php echo $resultado['data_ins']; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Data Da Carteira De Pesca</div>
                    </div>
                    <input class="form-control" id="data1" name="data_cat" value="<?php echo $resultado['data_cat']; ?>"  placeholder="Digite a Data da carteira de Pesca">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>NIT</div>
                    </div>
                    <input class="form-control" name="nit" value="<?php echo $resultado['nit']; ?>" placeholder="Digite o NIT">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>CEI</div>
                    </div>
                    <input class="form-control" name="cei" value="<?php echo $resultado['cei']; ?>"  placeholder="Digite o CEI"required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Data do inss</div>
                    </div>
                    <input class="form-control" id="data3" name="data_ins" value="<?php echo $resultado['data_ins']; ?>"  placeholder="Digite o Data do inss"required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Embarcação</div>
                    </div>
                    <input class="form-control" name="embarcacao" value="<?php echo $resultado['embarcacao']; ?>"  placeholder="Digite o Nome da Embarcação"required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Nivel De Estudo</div>
                    </div>
                    <input class="form-control"  name="nivel" value="<?php echo $resultado['nivel']; ?>"  placeholder="Digite o Nivel de Estudo">
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
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Assinatura Do Socio</div>
                    </div>
                    <input class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Assinatura Do Presidente</div>
                    </div>
                    <input class="form-control">
                  </div>
                </div>
              </div>
              <div class="text-center">
                <input type="submit" value="REGISTRAR" >
              </div>
            </div>
          </div>
        </form>
        <!--Form with header-->
      </div>
    </div>
    </div>  <?php
    include "rodape.php"
    ?>
    <script type="text/javascript" >
      $(document).ready( function() {
        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#img-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
        $("#imgInp").change(function(){
          readURL(this);
        });   
      });
    </script>
  </body>
  </html>