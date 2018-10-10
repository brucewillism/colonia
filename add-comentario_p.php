<?php
include 'bd/conexao.php';

?>

<?php
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
    //Valida a variavel da URL
    // var_dump($id);
    if (empty($id)){
      echo "ID para alteração não definido";
      exit;
    }
    
    if (isset($_POST['acao'])) {
        $nomeComent = addslashes($_POST['nomeComent']);
        $coment = addslashes($_POST['coment']);
        $acao = addslashes($_POST['acao']);

$sql = "INSERT INTO TB_COMENTARIO_p (COM_NOME,COM_COMENTARIO,pescador_id) VALUES(:nomeComent, :coment, :id)";
$stmt = $conn->prepare( $sql );

$stmt->bindParam( ':nomeComent', $nomeComent);
$stmt->bindParam( ':coment', $coment);
$stmt->bindParam( ':id', $id);

$result = $stmt->execute();
if ( ! $result ){
  var_dump( $stmt->errorInfo() );
  exit;
}
unset($_POST['acao']);
header('location:detalhes_pescador.php?id=' . $id);
} 

?>