<?php
require 'conexao.php';

  if(isset($_POST["cadastrar"])){

    $sql = "INSERT INTO pagamentos (pescador_id, vencimento, prorrogado, pagamento, forma_pagamento, pagamentos_mesais, baixar, valor, obs)
    VALUES ('".$_POST["pescador_id"]."','".$_POST["vencimento"]."','".$_POST["prorrogado"]."','".$_POST["pagamento"]."','".$_POST["forma_pagamento"]."','".$_POST["pagamentos_mesais"]."','".$_POST["baixar"]."','".$_POST["valor"]."','".$_POST["obs"]."')";

    if ($conn->query($sql) === TRUE) {
      echo "Novo pagamento foi cadastrado com sucesso!";
    } else {
      echo "erro ao cadastrar";
    }
  }
  echo "<script>location.href='../lista_pag.php';</script>";

  ?>