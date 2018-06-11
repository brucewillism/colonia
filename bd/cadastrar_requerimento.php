<?php
	include 'conexao.php';
	$user_id = $_SESSION['user_id'];
	$nome = htmlspecialchars($_POST["nome"]);
	$assinatura = htmlspecialchars($_POST["assinatura"]);
	$select_tipo = htmlspecialchars($_POST["select_tipo"]);
	$nome_estudante = htmlspecialchars($_POST["nome_estudante"]);
	$curso = htmlspecialchars($_POST["curso"]);
	$select_motivo = htmlspecialchars($_POST["select_motivo"]);
	$relato = htmlspecialchars($_POST["relato"]);
	$nome_receptor = htmlspecialchars($_POST["nome_receptor"]);
	$assinatura_receptor = htmlspecialchars($_POST["assinatura_receptor"]);

  $sql ="INSERT INTO cadastro(nome, assinatura, select_tipo, user_id,nome_estudante, curso, select_motivo, relato, nome_receptor, assinatura_receptor)
  VALUES (:nome, :assinatura, :select_tipo, :user_id, :nome_estudante, :curso, :select_motivo, :relato, :nome_receptor, :assinatura_receptor)";

	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':nome', $nome);
	$stmt->bindParam( ':assinatura', $assinatura);
	$stmt->bindParam( ':select_tipo', $select_tipo);
	$stmt->bindParam( ':user_id', $user_id);
	$stmt->bindParam( ':nome_estudante', $nome_estudante);
	$stmt->bindParam( ':curso', $curso);
	$stmt->bindParam( ':select_motivo', $select_motivo);
	$stmt->bindParam( ':relato', $relato);
	$stmt->bindParam( ':nome_receptor', $nome_receptor);
	$stmt->bindParam( ':assinatura_receptor', $assinatura_receptor);
	$result = $stmt->execute();
	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}
echo "<script>location.href='../index.php';</script>";
?>