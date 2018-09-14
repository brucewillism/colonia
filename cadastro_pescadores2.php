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
        <div class="form-group col-md-8"><br>
          <label for="nomeFan">Nome do Pai:</label>
          <input type="text" class="form-control" id="nomeFan" placeholder="Digite o nome do seu pai" name="nome">
        </div>

      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="mae">Nome da Mãe:</label>
          <input type="text" class="form-control" id="mae" placeholder="Digite o Nome da sua mae" name="mae">
        </div>

        <div class="form-group col-md-6">
          <label for="filho">Nome do Filho:</label>
          <input type="text" class="form-control" id="filho" placeholder="Digite o nome do seu filho" name="filho">
        </div>
      </div><br> <br>
 <p id="titulo">Dados Profissionais Dos Pescadores</p> <br>
      <div class="form-row">
        <div class="form-group col-md-4">   
          <label for="data">Data de Nascimento:</label>
          <input type="date" class="form-control" id="rua" placeholder="data" name="data" required>
        </div>
          
        <div class="form-group col-md-6">
          <label for="org">Órgão Exp:</label>
          <input type="text" class="form-control" id="org" placeholder="Digite seu Orgão expedidor" name="org">
        </div>


      <div class="form-row">
        <div class="form-group col-md-10">
          <label for="rpg">RPG:</label>
          <input type="text" class="form-control" id="rpg" placeholder="Digite seu rpg" name="rpg">
       </div>
        </div>
        <div class="form-group col-md-4">
          <label for="data">Data de Inscrição:</label>
          <input type="date" class="form-control" id="data" placeholder="Digite a data" name="data">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inss">Inscrição do INSS:</label>
          <input type="text" class="form-control" id="senha" placeholder="Digite a Inscrição" name="inss">
        </div>
    
        <div class="form-group col-md-4">
          <label for="senha">Inscrição do RG:</label>
          <input type="text" class="form-control" id="rg" placeholder="Digite seu rg" name="rg">
        </div>
      </div>


       <div class="form-row">
        <div class="form-group col-md-10">
          <label for="nomeFan">Assinatura do Socio:</label>
          <input type="text" class="form-control" id="nomeFan" placeholder="" name="nome" required>
        </div>

      </div>



       <div class="form-row">
        <div class="form-group col-md-10">
          <label for="nome">Assinatura do presidente:</label>
          <input type="text" class="form-control" id="nome" placeholder="" required>
        </div>

      </div>






      
      <div class="form-row">
        <div class="form-group col-md-2"><br>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </div>
    </form>
  </div>
</main>
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