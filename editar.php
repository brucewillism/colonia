<?php
include 'bd/conexao.php'
?>
<?php

$pescador_id = isset($_GET['id']);

$matricula = addslashes($_POST['matricula']);
$nome = addslashes($_POST['nome']);
$endereco = addslashes($_POST['endereco']) ;
$bairro = addslashes($_POST['bairro']) ;
$estado = addslashes($_POST['estado']) ;
$cpf = addslashes($_POST['cpf']) ;
$titulo = addslashes($_POST['titulo']) ;
$profissional = addslashes($_POST['profissional']) ;
$pis = addslashes($_POST['pis']) ;
$nascimento = addslashes($_POST['nascimento']) ;
$rgp = addslashes($_POST['rgp']) ;
$nome_pai = addslashes($_POST['nome_pai']) ;
$nome_mae = addslashes($_POST['nome_mae']) ;
$dependente = addslashes($_POST['dependente']) ;
$data_ins = addslashes($_POST['data_ins']) ;
$insc_inss = addslashes($_POST['insc_inss']) ;
$rg = addslashes($_POST['rg']) ;
$orgao = addslashes($_POST['orgao']) ;
$estado_civil = addslashes($_POST['estado_civil']) ;
$file_path= addslashes($_FILES['file']['tmp_name']);

$file = file_get_contents($file_path);


 // validação para evitar dados vazios
if (($matricula) || ($nome) || ($endereco) || ($bairro) || ($estado) || ($cpf) || ($titulo) || ($profissional) || ($pis) || ($nascimento) || ($rgp)|| ($nome_pai) || ($nome_mae) || ($dependente) || ($data_ins) || ($insc_inss) ||
	($rg) || ($orgao)|| ($estado_civil) || ($file_path))
{
	echo "Volte e preencha todos os campos";
	exit;
}

$sql_msg_contatos = ("UPDATE pescadores SET
	:matricula = ?
	:nome = ?
	:endereco = ?
	:bairro = ?
	:estado = ?
	:cpf = ?
	:titulo = ?
	:profissional = ?
	:pis = ?
	:nascimento = ?
	:rgp = ?
	:nome_pai = ?
	:nome_mae = ?
	:dependente = ?
	:data_ins = ?
	:insc_inss = ?
	:rg = ?
	:orgao = ?
	:id_estado = ?
	WHERE pescador_id = ?");

$stmt = $conn->prepare($sql);	
$insert_msg_contato->bindParam(1, $pescador_id, PDO::PARAM_INT);
$insert_msg_contato->bindParam(2, $matricula);
$insert_msg_contato->bindParam(3, $nome);
$insert_msg_contato->bindParam(4, $endereco);
$insert_msg_contato->bindParam(5, $bairro);
$insert_msg_contato->bindParam(6, $estado);
$insert_msg_contato->bindParam(7, $cpf);
$insert_msg_contato->bindParam(8, $titulo);
$insert_msg_contato->bindParam(9, $profissional);
$insert_msg_contato->bindParam(10, $pis);
$insert_msg_contato->bindParam(11, $nascimento);
$insert_msg_contato->bindParam(12, $rgp);
$insert_msg_contato->bindParam(13, $nome_pai);
$insert_msg_contato->bindParam(14, $nome_mae);
$insert_msg_contato->bindParam(15, $dependente);
$insert_msg_contato->bindParam(16, $data_ins);
$insert_msg_contato->bindParam(17, $insc_inss);
$insert_msg_contato->bindParam(18, $rg);
$insert_msg_contato->bindParam(19, $orgao);
$insert_msg_contato->bindParam(20, $estado_civil);

$result = $stmt->execute();

if ( ! $result && ! $result ){
	var_dump( $stmt->errorInfo() );
	exit;
}

$_SESSION['sucess-editado']=1;
header('location:../armazenamento.php');



	$query = ("UPDATE pescadores SET ARQUIVO  = ? WHERE pescador_id = ?");

	$stmt = $conn->prepare($query);

	$stmt->bindParam(1, $file);
	$stmt->bindParam(2, $id);

	$result2 = $stmt->execute();


	if ( ! $result && ! $result2 ){
		var_dump( $stmt->errorInfo() );
		exit;
	}
	$_SESSION['sucess-editado']=1;
	header('location:../armazenamento.php');

?>