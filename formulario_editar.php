<?php
require_once 'bd/functions.php';
include 'cabeçalho.php';

// pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

//Valida a variavel da URL
if (empty($id)){
    echo "ID para alteração não definido";
    exit;
}

$PDO = db_connect();
$sql_msg_contato = "SELECT id, matricula, nome, endereco, bairro, estado, identidade, cpf, titulo, profissional, pis, nascimento, rgp, nome_pai, nome_mae, dependente, data_ins, insc_inss, rg, estado_civil, assinatura_socio, assinatura_presidente FROM pescadores WHERE id='$id'";
$result_msg_contato = $PDO->prepare($sql_msg_contato);
$result_msg_contato->bindParam(':id', $id, PDO::PARAM_INT);

$result_msg_contato->execute();

$resultado_msg_contato = $result_msg_contato->fetch(PDO::FETCH_ASSOC);

if(!is_array($resultado_msg_contato)){
    echo "Nunhum contato encontrado";
    exit;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar</title>
</head>
<body>
    <h1>Editar</h1>
    <form action="bd/editar.php" method="POST">
        <label>CADASTRO MAT. N</label>
        <input type="number" name="matricula" value="<?php echo $resultado_msg_contato['matricula']; ?>" >

        <h1>Dados Pessoais e Profissionais</h1>
        <label>Nome</label>
        <input type="text" nome="nome" placeholder="Digite seu Nome" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <label>Endereço</label>
        <input type="text" nome="endereco" placeholder="Digite seu endereço" value="<?php echo $resultado_msg_contato['endereco']; ?>" >
        <label>Bairro</label>
        <input type="text" nome="bairro" placeholder="Digite seu Bairro" value="<?php echo $resultado_msg_contato['bairro']; ?>" >
        <br>
        <label>Estado</label>
        <input type="text" nome="estado" placeholder="Digite seu Estado" value="<?php echo $resultado_msg_contato['estado']; ?>" >
        <label>Identidade</label>
        <input type="number" nome="identidade" placeholder="Digite seu Identidade" value="<?php echo $resultado_msg_contato['identidade']; ?>" >
        <label>CPF</label>
        <input type="number" nome="cpf" placeholder="Digite seu Cpf" value="<?php echo $resultado_msg_contato['cpf']; ?>" >
        <br>
        <label>Titulo</label>
        <input type="number" nome="titulo" placeholder="Digite seu Titulo" value="<?php echo $resultado_msg_contato['titulo']; ?>" >
        <label>Profissional</label>
        <input type="number" nome="profissional" placeholder="Digite sua Profissional" value="<?php echo $resultado_msg_contato['profissional']; ?>" >
        <label>Pis</label>
        <input type="number" nome="pis" placeholder="Digite seu Pis" value="<?php echo $resultado_msg_contato['pis']; ?>" >
        <br>
        <label>Data De Nascimento</label>
        <input type="date" nome="nascimento" placeholder="Digite sua Data de nascimento" value="<?php echo $resultado_msg_contato['Nascimento']; ?>" >
        <label>RGP</label>
        <input type="number" nome="rgp" placeholder="Digite seu Rgp" value="<?php echo $resultado_msg_contato['rgp']; ?>" >
        <label>Nome Do Pai</label>
        <input type="text" nome="nome_pai" placeholder="Digite seu Nome do pai " value="<?php echo $resultado_msg_contato['nome_pai']; ?>" >
        <br>
        <label>Nome Da Mãe</label>
        <input type="text" nome="nome_mae" placeholder="Digite seu Nome da mae "value="<?php echo $resultado_msg_contato['nome_mae']; ?>" >
        <label>Nome Do Filho</label>
        <input type="text" nome="dependente" placeholder="Digite seu Dependente" value="<?php echo $resultado_msg_contato['dependente']; ?>" >
        <label>Data Da Inscrição</label>
        <input type="date" nome="data_ins" placeholder="Digite a Data de Inscricão "value="<?php echo $resultado_msg_contato['data_ins']; ?>">
        <label></label>
        <input type="number" nome="insc_inss" placeholder="Digite a Inscrição do INSS"value="<?php echo $resultado_msg_contato['insc_inss']; ?>">
        <label>Inscrição do INSS</label>
        <input type="number" nome="rg" placeholder="Digite seu RG" value="<?php echo $resultado_msg_contato['rg']; ?>" >
        <label>Estado Civil</label>
        <select name="estado_civil" value="<?php echo $resultado_msg_contato['estado_civil']; ?>" >
            <option value="Solteiro(A)">Solteiro(A)</option>
            <option value="Casado(A)">Casado(A)</option>
            <option value="Divorciado(A)">Divorciado(A)</option>
            <option value="Viuva(A)">Viuva(A)</option>
        </select>
        <br>
        <label>Assinatura Do Socio</label>
        <input type="text" nome="assinatura_socio" value="<?php echo $resultado_msg_contato['assinatura_socio']; ?>"  >
        <label>Assinatura Do Presidente</label>
        <input type="text" nome="assinatura_presidente" value="<?php echo $resultado_msg_contato['assinatura_presidente']; ?>"  >

        <input type="submit" name="enviar" value="Salvar Cadastro">

    </form>
    <?php
    include 'rodape.php';
    ?>
</body>
</html>