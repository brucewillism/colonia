<?php
require_once 'functions.php';

$host = "localhost";
$usuario = "root";
$senha = "123";
$bd = "id2891328_s";

// pega os dados do formuário
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$quantidade = isset($_POST['quantidade']) ? $_POST['quantidade'] : null;
$preco = isset($_POST['preco']) ? $_POST['preco'] : null;
$id = isset($_POST['id']) ? $_POST['id'] : null;

// validação para evitar dados vazios
if (empty($nome) || empty($quantidade) || empty($preco))
{
    echo "Volte e preencha todos os campos";
    exit;
}

// insere no banco
$PDO = db_connect();
$sql_msg_contatos = "UPDATE cadastro SET nome = :nome, quantidade = :quantidade, preco = :preco WHERE id = :id";
$insert_msg_contato = $PDO->prepare($sql_msg_contatos);
$insert_msg_contato->bindParam(':nome', $nome);
$insert_msg_contato->bindParam(':quantidade', $quantidade);
$insert_msg_contato->bindParam(':preco', $preco);
$insert_msg_contato->bindParam(':id', $id, PDO::PARAM_INT);

if ($insert_msg_contato->execute()){
    header('Location:../armazenamento_itens.php');
}else{
    echo "Erro ao cadastrar";
    print_r($insert_msg_contato->errorInfo());
}