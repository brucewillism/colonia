<?php
include 'bd/conexao.php';
?>
<?php
$pescador_id = $_GET['id'];
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
$data_cat = htmlspecialchars($_POST["data_cat"]);
$cei = htmlspecialchars($_POST["cei"]);
$nit = htmlspecialchars($_POST["nit"]);
$embarcacao = htmlspecialchars($_POST["embarcacao"]);
$nivel = htmlspecialchars($_POST["nivel"]);
$situacao = htmlspecialchars($_POST["situacao"]);
$estado_civil = addslashes($_POST['estado_civil']);

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

	$sql = ("UPDATE pescadores
		SET matricula = :matricula, 
		nome = :nome, 
		endereco = :endereco, 
		bairro = :bairro, 
		estado = :estado, 
		cpf = :cpf, 
		titulo = :titulo, 
		profissional = :profissional, 
		pis = :pis, 
		nascimento = :nascimento,
		rgp = :rgp,
		nome_pai = :nome_pai,
		nome_mae = :nome_mae,
		dependente = :dependente,
		data_ins = :data_ins,
		insc_inss = :insc_inss,
		rg = :rg,
		orgao = :orgao,
		data_cat = :data_cat,
		cei = :cei,
		nit = :nit,
		embarcacao = :embarcacao,
		nivel = :nivel,
		situacao = :situacao,
		id_estado = :id_estado 
		WHERE pescador_id = :pescador_id");

	$stmt = $conn->prepare($sql);	

	$stmt->bindParam(":pescador_id", $pescador_id, PDO::PARAM_INT);
	$stmt->bindParam(":matricula", $matricula);
	$stmt->bindParam(":nome", $nome);
	$stmt->bindParam(":endereco", $endereco);
	$stmt->bindParam(":bairro", $bairro);
	$stmt->bindParam(":estado", $estado);
	$stmt->bindParam(":cpf", $cpf);
	$stmt->bindParam(":titulo", $titulo);
	$stmt->bindParam(":profissional", $profissional);
	$stmt->bindParam(":pis", $pis);
	$stmt->bindParam(":nascimento", $nascimento);
	$stmt->bindParam(":rgp", $rgp);
	$stmt->bindParam(":nome_pai", $nome_pai);
	$stmt->bindParam(":nome_mae", $nome_mae);
	$stmt->bindParam(":dependente", $dependente);
	$stmt->bindParam(":data_ins", $data_ins);
	$stmt->bindParam(":insc_inss", $insc_inss);
	$stmt->bindParam(":rg", $rg);
	$stmt->bindParam(":orgao", $orgao);
	$stmt->bindParam(":data_cat", $data_cat);
	$stmt->bindParam(":cei", $cei);
	$stmt->bindParam(":nit", $nit);
	$stmt->bindParam(":embarcacao", $embarcacao);
	$stmt->bindParam(":nivel", $nivel);
	$stmt->bindParam(":situacao", $situacao);

	$stmt->bindParam(":id_estado", $estado_civil);

	$result1 = $stmt->execute();

}else{
	$query = ("UPDATE pescadores 
		SET ARQUIVO  = :file,
		matricula = :matricula, 
		nome = :nome, 
		endereco = :endereco, 
		bairro = :bairro, 
		estado = :estado, 
		cpf = :cpf, 
		titulo = :titulo, 
		profissional = :profissional, 
		pis = :pis, 
		nascimento = :nascimento,
		rgp = :rgp,
		nome_pai = :nome_pai,
		nome_mae = :nome_mae,
		dependente = :dependente,
		data_ins = :data_ins,
		insc_inss = :insc_inss,
		rg = :rg,
		orgao = :orgao,
		data_cat = :data_cat,
		cei = :cei,
		nit = :nit,
		embarcacao = :embarcacao,
		nivel = :nivel,
		situacao = :situacao,
		id_estado = :id_estado		
		WHERE pescador_id = :pescador_id");

	$stmt = $conn->prepare($query);

	$stmt->bindParam(":file", $file);
	$stmt->bindParam(":pescador_id", $pescador_id);
	$stmt->bindParam(":matricula", $matricula);
	$stmt->bindParam(":nome", $nome);
	$stmt->bindParam(":endereco", $endereco);
	$stmt->bindParam(":bairro", $bairro);
	$stmt->bindParam(":estado", $estado);
	$stmt->bindParam(":cpf", $cpf);
	$stmt->bindParam(":titulo", $titulo);
	$stmt->bindParam(":profissional", $profissional);
	$stmt->bindParam(":pis", $pis);
	$stmt->bindParam(":nascimento", $nascimento);
	$stmt->bindParam(":rgp", $rgp);
	$stmt->bindParam(":nome_pai", $nome_pai);
	$stmt->bindParam(":nome_mae", $nome_mae);
	$stmt->bindParam(":dependente", $dependente);
	$stmt->bindParam(":data_ins", $data_ins);
	$stmt->bindParam(":insc_inss", $insc_inss);
	$stmt->bindParam(":rg", $rg);
	$stmt->bindParam(":orgao", $orgao);
	$stmt->bindParam(":data_cat", $data_cat);
	$stmt->bindParam(":cei", $cei);
	$stmt->bindParam(":nit", $nit);
	$stmt->bindParam(":embarcacao", $embarcacao);
	$stmt->bindParam(":nivel", $nivel);
	$stmt->bindParam(":situacao", $situacao);

	$stmt->bindParam(":id_estado", $estado_civil);


	$result2 = $stmt->execute();


	if ( ! $result2 && ! $result1){
		var_dump( $stmt->errorInfo() );
		exit;
	}
}
$_SESSION['sucess-editado']=1;
header('location:../armazenamento.php');
?>