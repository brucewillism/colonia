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
                        <a class="btn btn-secondary" href='cadastro_pescadores.php'>Cadastro De Pescador</a>
                        <a class="btn btn-secondary" href='cadastro_pescadores_caicara.php'>Cadastro De Pescador Caicara</a>
                    </span>
                </form>
            </div>
        </div>
    </div>
    <table class="table" border="1px" style="background: #75b6dc;">
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
            <td><a  href='formulario_editar.php?id=".$id."'>Editar</a></td>
            <td><a id='myBtn' href='#?id=".$id."' >Mais detalhes</a></td>
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
            <td><a  href='formulario_editar_caicara.php?id=".$id."'>Editar</a></td>
            <td><a id='myBtn href='#?id=".$id."' >Mas detalhes</a></td>

            </tr>";
        }
        ?>
    </table>
<!-- -----------------modal---------------------------------------
 -->
 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/modal.css">
</head>
<body>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 class="parag">Detalhes Do Pescador</h1>
   <?php

        require_once 'bd/conexao.php';
        $stmt = $conn->query("SELECT * FROM pescadores WHERE id = $id");
        $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {
            $id = $dados['id'];
            $nome=$dados['nome'];
            $cpf = $dados['cpf'];
            $endereco = $dados['endereco'];
            $bairro = $dados['bairro'];
            $estado= $dados['estado'];
            $cpf= $dados['cpf'];
            $titulo= $dados['titulo'];
            $profissional= $dados['profissional'];
            $pis= $dados['pis'];
            $nascimento= $dados['nascimento'];
            $rgp= $dados['rgp'];
            $nome_pai= $dados['nome_pai'];
            $nome_mae= $dados['nome_mae'];
            $dependente= $dados['dependente'];
            $data_ins= $dados['data_ins'];
            $insc_inss= $dados['insc_inss'];
            $rg= $dados['rg'];
            $estado_civil= $dados['estado_civil'];
            $assinatura_socio= $dados['assinatura_socio'];
            $assinatura_presidente= $dados['assinatura_presidente'];

            echo "<table class='tabela' border=1 align=center>";
            echo"
            <tr>
            <th>Nome </th>
            <th>cpf</th>
            <th>endereco</th>
            <th>bairro</th>
            <th>estado</th>
            <th>cpf</th>
            <th>titulo</th>
            <th>profissional</th>
            <th>pis</th>
            <th>nascimento</th>
            <th>rgp</th>
            <th>nome_pai</th>
            <th>nome_mae</th>
            <th>dependente</th>
            <th>data_ins</th>
            <th>insc_inss</th>
            <th>rg</th>
            <th>estado_civil</th>
            <th>assinatura_socio</th>
            <th>assinatura_presidente</th>
            </tr>";

            echo "<form method='post' action='#' >
                    <input type='file' name='arquivo'>
                    <a data-placement='top'></a>
                  </form>";
            echo "<img class='imagem' src='imagem/avatar.png' height='100' width='100'>";
            echo "<tr>
            <td> "."$nome"."</td>
            <td>"."$cpf"."</td>
            <td>"."$endereco"."</td>
            <td>"."$bairro"."</td>
            <td>"."$estado"."</td>
            <td>"."$cpf"."</td>
            <td>"."$titulo"."</td>
            <td>"."$profissional"."</td>
            <td>"."$pis"."</td>
            <td>"."$nascimento"."</td>
            <td>"."$rgp"."</td>
            <td>"."$nome_pai"."</td>
            <td>"."$nome_mae"."</td>
            <td>"."$dependente"."</td>
            <td>"."$data_ins"."</td>
            <td>"."$insc_inss"."</td>
            <td>"."$rg"."</td>
            <td>"."$estado_civil"."</td>
            <td>"."$assinatura_socio"."</td>
            <td>"."$assinatura_presidente"."</td>
            </tr>";

        }
        echo "</table>";
        $stmt1 = $conn->query("SELECT * FROM pescadores_caicaras WHERE id = $id");
        $cadastro1 = $stmt1->fetchAll();
        foreach ($cadastro1 as $dados) {
            $id = $dados['id'];
            $nome=$dados['nome'];
            $cpf = $dados['cpf'];
            $endereco = $dados['endereco'];
            $bairro = $dados['bairro'];
            $estado= $dados['estado'];
            $cpf= $dados['cpf'];
            $nascimento= $dados['nascimento'];
            $rgp= $dados['rgp'];
            $nome_pai= $dados['nome_pai'];
            $nome_mae= $dados['nome_mae'];
            $dependente= $dados['dependente'];
            $data_ins= $dados['data_ins'];
            $insc_inss= $dados['insc_inss'];
            $rg= $dados['rg'];
            $estado_civil= $dados['estado_civil'];
            $assinatura_socio= $dados['assinatura_socio'];
            $assinatura_presidente= $dados['assinatura_presidente'];
            echo "<table class='tabela' border=1 align=center>";
            echo"
            <tr>
            <th>Nome</th>
            <th>cpf</th>
            <th>endereco</th>
            <th>bairro</th>
            <th>estado</th>
            <th>cpf</th>
            <th>nascimento</th>
            <th>rgp</th>
            <th>nome_pai</th>
            <th>nome_mae</th>
            <th>dependente</th>
            <th>data_ins</th>
            <th>insc_inss</th>
            <th>rg</th>
            <th>estado_civil</th>
            <th>assinatura_socio</th>
            <th>assinatura_presidente</th>
            </tr>";
           echo "<form method='post' action='#'>
                    <input type='file' name='arquivo'>
                    <a data-placement='top'></a>
                 </form>";
            echo "<img class='imagem' src='imagem/avatar.png' height='100' width='100'>";
            echo "<tr>
            <td> "."$nome"."</td>
            <td>"."$cpf"."</td>
            <td>"."$endereco"."</td>
            <td>"."$bairro"."</td>
            <td>"."$estado"."</td>
            <td>"."$cpf"."</td>

            <td>"."$nascimento"."</td>
            <td>"."$rgp"."</td>
            <td>"."$nome_pai"."</td>
            <td>"."$nome_mae"."</td>
            <td>"."$dependente"."</td>
            <td>"."$data_ins"."</td>
            <td>"."$insc_inss"."</td>
            <td>"."$rg"."</td>
            <td>"."$estado_civil"."</td>
            <td>"."$assinatura_socio"."</td>
            <td>"."$assinatura_presidente"."</td>
            </tr>";
        }
        echo "</table>";
        ?>
    </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- //-------------------------------fim do modal -------------------------------
 -->
</body>
</html>