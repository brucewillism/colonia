    <?php
    require_once 'conexao.php';
    if(isset($_POST["submit"])){

      $sql = "UPDATE pagamentos SET vencimento='".$_POST['vencimento']."',prorrogado='".$_POST['prorrogado']."',pescador_id='".$_POST['pescador_id']."',pagamento='".$_POST['pagamento']."',forma_pagamento='".$_POST['forma_pagamento']."',baixar='".$_POST['baixar']."',valor='".$_POST['valor']."',obs='".$_POST['obs']."' WHERE id='".$_GET['id']."'";

      if ($conn->query($sql) === TRUE) {
        echo "Novo pagamento foi cadastrado com sucesso!";
      } else {
        echo "erro ao cadastrar";
      }
    }
    echo "<script>location.href='../lista_pag.php';</script>";

    ?>