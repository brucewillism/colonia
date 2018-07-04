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
                    <input type="text" class="form-control" placeholder="Pesquise Aqui...">
                    <span class="input-group-btn">
                        <input class="btn btn-secondary" type="submit" name="pesquisa" value="pesquisar"></input>
                        <a class="btn btn-secondary" href='cadastro_pescadores.php'>Cadastro De Pescadore</a>
                        <a class="btn btn-secondary" href='cadastro_pescadores_caicara.php'>Cadastro De Pescadore Caicara</a>
                    </span>
                </form>
            </div>
        </div>
    </div>
    <table class="table" border="1px">
        <tr>
            <th>Nome </th>
            <th>CPF</th>
            <th>endereco</th>
            <th>Bairro</th>
            <th>Deletar</th>
            <th>Editar</th>
            <th>Detalhes</th>
        </tr>
        <?php

        require_once 'bd/conexao.php';

        $stmt = $conn->query("SELECT * FROM pescadores");
        $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {
            $id = $dados['id'];
            $nome=$dados['nome'];
            $cpf = $dados['cpf'];
            $endereco = $dados['endereco'];
            $bairro = $dados['bairro'];
            echo "<tr>
            <td> "."$nome"."</td>
            <td>"."$cpf"."</td>
            <td>"."$endereco"."</td>
            <td>"."$bairro"."</td>
            <td><a  href='bd/excluir.php?id=".$id."'>Excluir</a></td>
            <td><a  href='editar.php?id=".$id."'>Editar</a></td>
            <td><button style='color:#337ab7;'data-toggle='modal' data-target='#myModal'>Detalhes</button></td>

            </tr>";
        }
        $stmt1 = $conn->query("SELECT * FROM pescadores_caicaras");
        $cadastro1 = $stmt1->fetchAll();
        foreach ($cadastro1 as $dados) {
            $id = $dados['id'];
            $nome=$dados['nome'];
            $cpf = $dados['cpf'];
            $endereco = $dados['endereco'];
            $bairro = $dados['bairro'];
            echo "<tr>
            <td> "."$nome"."</td>
            <td>"."$cpf"."</td>
            <td>"."$endereco"."</td>
            <td>"."$bairro"."</td>
            <td><a  href='bd/excluir2.php?id=".$id."'>Excluir</a></td>
            <td><a  href='editar2.php?id=".$id."'>Editar</a></td>
            <td><button style='color:#337ab7;'data-toggle='modal' data-target='#myModal'>Detalhes</button></td>

            </tr>";
        }
        ?>
    </table>
    <div class="container">

      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <table>

                <?php

                require_once 'bd/conexao.php';

                $stmt = $conn->query("SELECT * FROM pescadores");
                $cadastro = $stmt->fetchAll();
                foreach ($cadastro as $dados) {
                    $id = $dados['id'];
                    $nome=$dados['nome'];
                    $cpf = $dados['cpf'];
                    $endereco = $dados['endereco'];
                    $bairro = $dados['bairro'];
                    echo "<tr>
                    <td> "."$nome"."</td>
                    <td>"."$cpf"."</td>
                    <td>"."$endereco"."</td>
                    <td>"."$bairro"."</td>
                    <td><a  href='bd/excluir.php?id=".$id."'>Excluir</a></td>
                    <td><a  href='formulario_editar.php?id=".$id."'>Editar</a></td>
                    <td><button' style='color:#337ab7;'data-toggle='modal' data-target='#myModal'></button></td>

                    </tr>";
                }
                ?>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
  </div>

</div>
</div>

</div>


</div>
</div>

</div>

<?php
require_once'rodape.php';
?>
</body>
</html>