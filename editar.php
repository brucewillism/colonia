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

//  // validação para evitar dados vazios
// if (($matricula) || ($nome) || ($endereco) || ($bairro) || ($estado) || ($cpf) || ($titulo) || ($profissional) || ($pis) || ($nascimento) || ($rgp)|| ($nome_pai) || ($nome_mae) || ($dependente) || ($data_ins) || ($insc_inss) ||
// 	($rg) || ($orgao)|| ($estado_civil) || ($file))
// {
// 	echo "Volte e preencha todos os campos";
// 	exit;
// }
if($file == false){

	$sql = ("UPDATE pescadores SET :matricula = ? :nome = ? :endereco = ? :bairro = ? :estado = ? :cpf = ? :titulo = ? :profissional = ? :pis = ? :nascimento = ? :rgp = ? :nome_pai = ? :nome_mae = ? :dependente = ? :data_ins = ? :insc_inss = ? :rg = ? :orgao = ? :id_estado = ?WHERE pescador_id = ?");

	$stmt = $conn->prepare($sql);	

	$stmt->bindParam(1, $pescador_id, PDO::PARAM_INT);
	$stmt->bindParam(2, $matricula);
	$stmt->bindParam(3, $nome);
	$stmt->bindParam(4, $endereco);
	$stmt->bindParam(5, $bairro);
	$stmt->bindParam(6, $estado);
	$stmt->bindParam(7, $cpf);
	$stmt->bindParam(8, $titulo);
	$stmt->bindParam(9, $profissional);
	$stmt->bindParam(10, $pis);
	$stmt->bindParam(11, $nascimento);
	$stmt->bindParam(12, $rgp);
	$stmt->bindParam(13, $nome_pai);
	$stmt->bindParam(14, $nome_mae);
	$stmt->bindParam(15, $dependente);
	$stmt->bindParam(16, $data_ins);
	$stmt->bindParam(17, $insc_inss);
	$stmt->bindParam(18, $rg);
	$stmt->bindParam(19, $orgao);
	$stmt->bindParam(20, $estado_civil);

	$result1 = $stmt->execute();

}else{
	$query = ("UPDATE pescadores SET ARQUIVO  = ? WHERE pescador_id = ?");

	$stmt = $conn->prepare($query);

	$stmt->bindParam(1, $file);
	$stmt->bindParam(2, $id);

	$result2 = $stmt->execute();


	if ( ! $result2 && ! $result1){
		var_dump( $stmt->errorInfo() );
		exit;
	}
	$_SESSION['sucess-editado']=1;
	header('location:../armazenamento.php');
}
?>