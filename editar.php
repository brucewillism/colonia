<?php
// require_once 'cabeçalho.php';

$host = "localhost";
$usuario = "root";
$senha = "123";
$bd = "pibex";

$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

//Valida a variavel da URL
if (empty($id)){
    echo "ID para alteração não definido";
    exit;
}
// pega os dados do formuário

$matricula = isset($_POST['matricula']) ? $_POST['matricula'] : null;
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : null;
$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : null;
$estado = isset($_POST['estado']) ? $_POST['estado'] : null;
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
$profissional = isset($_POST['profissional']) ? $_POST['profissional'] : null;
$pis = isset($_POST['pis']) ? $_POST['pis'] : null;
$nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : null;
$rgp = isset($_POST['rgp']) ? $_POST['rgp'] : null;
$nome_pai = isset($_POST['nome_pai']) ? $_POST['nome_pai'] : null;
$nome_mae = isset($_POST['nome_mae']) ? $_POST['nome_mae'] : null;
$dependente = isset($_POST['dependente']) ? $_POST['dependente'] : null;
$data_ins = isset($_POST['data_ins']) ? $_POST['data_ins'] : null;
$insc_inss = isset($_POST['insc_inss']) ? $_POST['insc_inss'] : null;
$rg = isset($_POST['rg']) ? $_POST['rg'] : null;
$estado_civil = isset($_POST['estado_civil']) ? $_POST['estado_civil'] : null;
$assinatura_socio = isset($_POST['assinatura_socio']) ? $_POST['assinatura_socio'] : null;
$assinatura_presidente = isset($_POST['assinatura_presidente']) ? $_POST['assinatura_presidente'] : null;

// validação para evitar dados vazios
if (empty($matricula) || (empty($nome) || empty($endereco) || empty($bairro)|| empty($estado) || empty($cpf) || empty($titulo) || empty($profissional) ||
    empty($pis) || empty($nascimento) || empty($rgp)|| empty($nome_pai) || empty($nome_mae) || empty($dependente) || empty($data_ins) || empty($insc_inss) ||
    empty($rg) || empty($estado_civil) || empty($assinatura_socio) || empty($assinatura_presidente)))
{
    echo "Volte e preencha todos os campos";
    exit;
}

// insere no banco

$host = "localhost";
$usuario = "root";
$senha = "123";
$bd = "pibex";
try {
    $conn = new PDO("mysql:host=localhost;dbname=$bd", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
<?php
$stmt = $conn->prepare("UPDATE pescadores SET id = :id, matricula = :matricula, nome = :nome, endereco = :endereco, bairro = :bairro, estado = estado, cpf = :cpf, titulo = :titulo, profissional = :profissional, pis = :pis, nascimento = :nascimento, rgp = :rgp, nome_pai = :nome_pai, nome_mae = :nome_mae, dependente = :dependente, data_ins = :data_ins, insc_inss = :insc_inss, rg = :rg, estado_civil = :estado_civil, assinatura_socio = :assinatura_socio, assinatura_presidente = :assinatura_presidente WHERE id = :id");
$stmt->execute(array(
    ':id'=> $id,
    ':matricula'=> $matricula,
    ':nome'=> $nome,
    ':endereco'=> $endereco,
    ':bairro'=> $bairro,
    ':estado'=> $estado,
    ':cpf'=> $cpf,
    ':titulo'=> $titulo,
    ':profissional'=> $profissional,
    ':pis'=> $pis,
    ':nascimento'=> $nascimento,
    ':rgp'=> $rgp,
    ':nome_pai'=> $nome_pai,
    ':nome_mae'=> $nome_mae,
    ':dependente'=> $dependente,
    ':data_ins'=> $data_ins,
    ':insc_inss'=> $insc_inss,
    ':rg'=> $rg,
    ':estado_civil'=> $estado_civil,
    ':assinatura_socio'=> $assinatura_socio,
    ':assinatura_presidente'=> $assinatura_presidente));


  if ($stmt->execute()){
    header('Location:../armazenamento.php');
}else{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
?>
<?php
    require_once 'rodape.php';
?>