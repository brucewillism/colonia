<?php
require_once '../bd/functions.php';
include 'menu.php';
include 'menu_lateral.php';

// pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

//Valida a variavel da URL
if (empty($id)){
    echo "ID para alteração não definido";
    exit;
}

$PDO = db_connect();
$sql_msg_contato = "SELECT id, matricula, nome, endereco, bairro, estado, indentidade, cpf, titulo, profissional, pis, nascimento, rgp, nome_pai, nome_mae, dependente, data, insc_inss, rg, estado_civil, assinatura_socio, assinatura_presidente FROM pescadores WHERE id='$id'";
$result_msg_contato = $PDO->prepare($sql_msg_contato);
$result_msg_contato->bindParam(':id', $id, PDO::PARAM_INT);

$result_msg_contato->execute();

$resultado_msg_contato = $result_msg_contato->fetch(PDO::FETCH_ASSOC);

if(!is_array($resultado_msg_contato)){
    echo "Nunhum contato encontrado";
    exit;
}
?>
<br>
<br>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar</title>
</head>
<body>
    <h1>Editar </h1>
    <form action="../bd/editar.php" method="POST">
        <input type="number" name="matricula">CADASTRO MAT. N
        <h1>Dados Pessoais e Profissionais</h1>
        <input type="text" nome="nome" placeholder="Digite seu Nome" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <input type="text" nome="endereco" placeholder="Digite seu endereço" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <input type="text" nome="bairro" placeholder="Digite seu Bairro" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <input type="text" nome="estado" placeholder="Digite seu Estado" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <input type="number" nome="indentidade" placeholder="Digite seu Identidade" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <input type="number" nome="cpf" placeholder="Digite seu Cpf" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <input type="number" nome="titulo" placeholder="Digite seu Titulo" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <input type="number" nome="profissional" placeholder="Digite sua Profissional" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <input type="number" nome="pis" placeholder="Digite seu Pis" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <input type="number" nome="nascimento" placeholder="Digite sua Data de value="<?php echo $resultado_msg_contato['nome']; ?>" Nascimento" >
        <input type="number" nome="rgp" placeholder="Digite seu Rgp" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <input type="text" nome="nome_pai" placeholder="Digite seu Nome do value="<?php echo $resultado_msg_contato['nome']; ?>" pai" >
        <input type="text" nome="nome_mae" placeholder="Digite seu Nome da value="<?php echo $resultado_msg_contato['nome']; ?>" mae" >
        <input type="text" nome="dependente" placeholder="Digite seu Dependente" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <input type="number" nome="data ins" placeholder="Digite a Data de value="<?php echo $resultado_msg_contato['nome']; ?>" Inscrição" >
        <input type="number" nome="insc_inss" placeholder="Digite a Inscrição do value="<?php echo $resultado_msg_contato['nome']; ?>" INSS" >
        <input type="number" nome="rg" placeholder="Digite seu RG" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <select name="estado_civil">
            <option value="Solteiro(A)">Solteiro(A)</option>
            <option value="Casado(A)">Casado(A)</option>
            <option value="Divorciado(A)">Divorciado(A)</option>
            <option value="Viuva(A)">Viuva(A)</option>
        </select>
        <input type="text" nome="assinatura_socio" >
        <input type="text" nome="assinatura_presidente" >

        <input type="submit" name="enviar" value="Salvar Cadastro">

    </form>
    <br>
    <br>
    <?php
    include 'rodape.php';
    ?>
</body>
</html>