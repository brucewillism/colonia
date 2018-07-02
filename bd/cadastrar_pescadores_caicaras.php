<?php
include 'conexao.php';

$id = $_SESSION['id'];
$matricula = htmlspecialchars($_POST["matricula"]);
$nome = htmlspecialchars($_POST["nome"]);
$endereco = htmlspecialchars($_POST["endereco"]);
$bairro = htmlspecialchars($_POST["bairro"]);
$estado = htmlspecialchars($_POST["estado"]);
$identidade = htmlspecialchars($_POST["identidade"]);
$cpf = htmlspecialchars($_POST["cpf"]);
$nascimento = htmlspecialchars($_POST["nascimento"]);
$rgp = htmlspecialchars($_POST["rgp"]);
$nome_pai = htmlspecialchars($_POST["nome_pai"]);
$nome_mae = htmlspecialchars($_POST["nome_mae"]);
$dependente = htmlspecialchars($_POST["dependente"]);
$data_ins = htmlspecialchars($_POST["data_ins"]);
$insc_inss = htmlspecialchars($_POST["insc_inss"]);
$rg = htmlspecialchars($_POST["rg"]);
$estado_civil = htmlspecialchars($_POST["estado_civil"]);
$assinatura_socio = htmlspecialchars($_POST["assinatura_socio"]);
$assinatura_presidente = htmlspecialchars($_POST["assinatura_presidente"]);

$sql ="INSERT INTO pescadores_caicaras (id, matricula, nome, endereco, bairro, estado, identidade, cpf, nascimento, rgp, nome_pai, nome_mae, dependente, data_ins, insc_inss, rg, estado_civil, assinatura_socio, assinatura_presidente)
VALUES (:id, :matricula, :nome, :endereco, :bairro, :estado, :identidade, :cpf, :nascimento,:rgp,:nome_pai,:nome_mae,:dependente,:data_ins,:insc_inss,:rg,:estado_civil,:assinatura_socio, :assinatura_presidente)";

$stmt = $conn->prepare( $sql );
$stmt->bindParam( ':id', $id);
$stmt->bindParam( ':matricula', $matricula);
$stmt->bindParam( ':nome', $nome);
$stmt->bindParam( ':endereco', $endereco);
$stmt->bindParam( ':bairro', $bairro);
$stmt->bindParam( ':estado', $estado);
$stmt->bindParam( ':identidade', $identidade);
$stmt->bindParam( ':cpf', $cpf);
$stmt->bindParam( ':nascimento', $nascimento);
$stmt->bindParam( ':rgp', $rgp);
$stmt->bindParam( ':nome_pai', $nome_pai);
$stmt->bindParam( ':nome_mae', $nome_mae);
$stmt->bindParam( ':dependente', $dependente);
$stmt->bindParam( ':data_ins', $data_ins);
$stmt->bindParam( ':insc_inss', $insc_inss);
$stmt->bindParam( ':rg', $rg);
$stmt->bindParam( ':estado_civil', $estado_civil);
$stmt->bindParam( ':assinatura_socio', $assinatura_socio);
$stmt->bindParam( ':assinatura_presidente', $assinatura_presidente);
$result = $stmt->execute();
if ( ! $result ){
    var_dump( $stmt->errorInfo() );
    exit;
}
echo "<script>location.href='../armazemamento.php';</script>";
?>