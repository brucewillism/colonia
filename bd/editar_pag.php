    <?php
    require_once 'conexao.php';
    
    $id = $_GET['id'];
    $vencimento = addslashes($_POST['vencimento']);
    $prorrogado = addslashes($_POST['prorrogado']);
    $pagamento = addslashes($_POST['pagamento']);
    $forma_pagamento = addslashes($_POST['forma_pagamento']);
    $baixar = addslashes($_POST['baixar']);
    $valor = addslashes($_POST['valor']);
    $obs = addslashes($_POST['obs']);

    $sql = ("UPDATE pagamentos 
      SET vencimento = :vencimento,
      prorrogado = :prorrogado,
      pagamento = :pagamento,
      forma_pagamento = :forma_pagamento,
      baixar = :baixar,
      valor = :valor,
      obs = :obs
      WHERE id = :id");

    $stmt = $conn->prepare($sql); 

    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->bindParam(":vencimento", $vencimento);
    $stmt->bindParam(":prorrogado", $prorrogado);
    $stmt->bindParam(":pagamento", $pagamento);
    $stmt->bindParam(":forma_pagamento", $forma_pagamento);
    $stmt->bindParam(":baixar", $baixar);
    $stmt->bindParam(":valor", $valor);
    $stmt->bindParam(":obs", $obs);

    $result1 = $stmt->execute();


    if ( ! $result1){
      var_dump( $stmt->errorInfo() );
      exit;
    }

    $_SESSION['sucess-editado']=1;
    
    header('location:../lista_pag.php');
    
    ?>