<?php
include "cabeçalho.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
      #div {
        text-align: left;
      }
      #div.input{
        color: white;
      }

    </style>
</head>
<br>
<br>
<br>
<br/>
<body>
    <form action="bd/cadastrar_pescadores.php" method="POST">
     <main>

  <div class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <h2>Cadastro dos Pescadores</h2>
        </div>
      </div>
      <main>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="nomeFan">Nome Completo:</label>
          <input type="text" class="form-control" id="nomeFan" placeholder="Nome Completo" name="nomeFan" required>
        </div>

        <div class="form-group col-md-4">
          <label for="mat">Matricula:</label>
          <input type="number" class="form-control" id="mat" placeholder="Digite sua matricula" name="matricula" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="end">Endereço:</label>
          <input type="text" class="form-control" id="fone" placeholder="Digite seu endereço" name="end">
        </div>

        <div class="form-group col-md-4">
          <label for="CPF">CPF:</label>
          <input type="text" class="form-control" id="cel" placeholder="Digite seu cpf" name="cpf" required>
        </div>

        <div class="form-group col-md-4">
          <label for="es">Estado:</label>
          <input type="text" class="form-control" id="es" placeholder="Digite seu estado" name="es">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="rua">Rua:</label>
          <input type="text" class="form-control" id="rua" placeholder="Digite sua rua" name="rua">
        </div>

        <div class="form-group col-md-4">
          <label for="bairro">Bairro:</label>
          <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro" required>
        </div>

        <div class="form-group col-md-4">
          <label for="cidade">Cidade:</label>
          <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade">

        </div>
      </div><br>
      <div class="form-row">
        <div class="form-group col-md-2">
        <label>Categoria</label><br>
          <select name="categoria" required>
            <?php
            include 'bd/conexao.php';
            $sql = "SELECT * FROM categorias";
            foreach ($conn->query($sql) as $registro) {
                $id = $registro['id'];
                $nome = $registro['nome_cat'];
                echo "<option value='".$id."'>".$nome."</option>";
            }
            ?>
        </select>
      </div>


        <div class="form-group col-md-4"> 
          <label for="email">Titulo:</label>
          <input type="text" class="form-control" id="email" placeholder="Digite seu titulo" name="titulo">
        </div>
     
      <div class="form-group col-md-4"> 
          <label for="Car">Carteira Profissional:</label>
          <input type="text" class="form-control" id="car" placeholder="Digite sua carteira" name="car">

        </div>

        <div class="form-row"> 
        <div class="form-group col-md-10"> 
          <label for="end">PIS:</label>
          <input type="text" class="form-control" id="fone" placeholder="Digite seu pis" name="end">
        




        </div>
      </div>
          <div class="form-row"> <br>
        <div class="form-group col-md-6"> 
        <label>Categoria</label><br> <br>
      <select name="estado_civil">
            <?php
            include 'bd/conexao.php';
            $sql = "SELECT * FROM estado_civil";
            foreach ($conn->query($sql) as $registro) {
                $id = $registro['id'];
                $nome = $registro['nome_est'];
                echo "<option value='".$id."'>".$nome."</option>";
            }
            ?>
        </div>
        </select>
        </div>



        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-2"><br>
         <ul class="pagination justify-content-center mb-4">
            <li class="page-item ">
              <a class="page-link" href="cadastro_pescadores2.php">Próxima &rarr;</a>
            </li>
          </ul>

        </div>
        </div>
      </div>
    </form>
  </div>

</main>
<?php
include "rodape.php"
?>
</body>
</html>