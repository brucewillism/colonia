<?php

include 'bd/conexao.php';
include 'cabeçalho.php';
?>
<script>
  $(function($){

    // No id #enviar assim que clicar executa a função

    $('.campo').blur(function(){

    /* veja que eu criei variáveis para guardar os itens
     * e só precisei usar a função val() para
     * retornar o valor dos campo para a várivel
     */        

     var campo =   $('.campo');

     var numero1 = $('#parcela').val();
     var numero2 = $('#valor').val();
     var numero3 = $('#acrescimo').val();
     var numero4 = $('#desconto').val();
     if ($('#parcela').val()=="") {
      var numero1 = 1 ;
    };
    if ($('#acrescimo').val()=="") {
      var numero3 = 0 ;
    };
    if ($('#desconto').val()=="") {
      var numero4 = 0 ;
    };

    var conta = ((parseFloat(numero1)*parseFloat(numero2))+parseFloat(numero3))-parseFloat(numero4);

    $('#total').val(conta.toFixed(2));

  });
  });
</script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<script type="text/javascript">
  $(document).ready(function($){  
    $("#data").mask("99/99/9999");
    $("#data1").mask("99/99/9999");
    $("#data2").mask("99/99/9999");
  });
</script>
<body>
  <br>
  <br>
  <br>
  <form class="" action="bd/salvar_pagamento.php" method="post">

    <center>
      <font face="arial" size="5" color="black">
        <B>Cadastro Pagamento</B>
      </font>
    </center>

    <div class="col-md-12">
      <br>
      <div class="col-md-12">

        <div class="col-md-6">
         <label>Pescador:</label>
         <select name="pescador_id" class="form-control" style="margin-bottom:20px;">
          <?php
          include 'bd/conexao.php';
          $sql = "SELECT * FROM pescadores";
          foreach ($conn->query($sql) as $registro) {
            $pescador_id = $registro['pescador_id'];
            $nome = $registro['nome'];
            echo "<option value='".$pescador_id."'>".$nome."</option>";
          }
          ?>
        </select>
      </div>
      
      <div class="col-md-6"> 
        <label>Vencimento:</label>
        <input type="text" id="data" name="vencimento" class="txt" maxlength="50" style="width:200px;margin-bottom:20px;"><br>
        <label>Prorrogado:</label>
        <input type="text" id="data1" name="prorrogado" class="txt" maxlength="50" style="width:200px;margin-bottom:20px;"><br>
        <label>Data Pagamento:</label>
        <input type="text" id="data2" name="pagamento" class="txt" maxlength="50" maxlength="2" style="width:200px;margin-bottom:20px;" >
      </div>
    </div>
    <br>
    <div class="col-md-3">
      <label>Forma de Pagamento : </label>
      <select name="forma_pagamento" class="form-control"  style="margin-bottom:20px;">
        <option>Selecione...</option>
        <option value="Dinheiro">Dinheiro</option>
        <option value="Depósito">Acordo</option>
      </select>
    </div>
    <div class="col-md-3">
      <label>Mes de Pagamento : </label>
      <select name="pagamentos_mesais" required>
        <?php
        include 'bd/conexao.php';
        $sql = "SELECT * FROM pagamentos_mesais";
        foreach ($conn->query($sql) as $registro) {
          $id_mes = $registro['id_mes'];
          $nome_mes = $registro['nome_mes'];
          echo "<option value='".$id_mes."'>".$nome_mes."</option>";
        }
        ?>
      </select>  
    </div>
    <div class="col-md-3">
      <label>Lançar e Baixar:</label><br>
      <input type="checkbox" name="baixar" id="baixar" style="margin-bottom:20px;"/>
    </div>
    <div class="col-md-3">
      <label>Valor:</label>
      <input id="valor" type="text" name="valor" class="txt campo" maxlength="50" style="width:100%;margin-bottom:20px;" >
    </div>
    <div class="col-md-12">
      <label for="cPed">Observações:</label>
      <textarea name="obs" rows="2" cols="56" class="form-control" onfocus="this.value='';"
      style="font-size: 30px; font-family:Times New Roman;color:red;white-space:pre-wrap;width:100%;margin-bottom:20px;">Observações sobre o título
    </textarea>

  </div>
  <div class="col-md-12">
    <center>
      <input type="submit" name="cadastrar" value="Cadastrar" id="btncad">
      <input type="button" value="Cancelar" id="btncan">
    </center>
  </div>
</div>
</form>
</body>