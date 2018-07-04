<?php
require_once 'bd/functions.php';
require_once 'cabeçalho.php';

// pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

//Valida a variavel da URL
if (empty($id)){
    echo "ID para alteração não definido";
    exit;
}

$PDO = db_connect();
$sql_msg_contato = "SELECT id, matricula, nome, endereco, bairro, estado, cpf, titulo, profissional, pis, nascimento, rgp, nome_pai, nome_mae, dependente, data_ins, insc_inss, rg, estado_civil, assinatura_socio, assinatura_presidente FROM pescadores WHERE id='$id'";
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
    <form action="#" method="POST">
        <label>CADASTRO MAT. N</label>
        <input type="number" name="matricula" value="<?php echo $resultado_msg_contato['matricula']; ?>" >

        <h1>Dados Pessoais e Profissionais</h1>
        <label>Nome</label>
        <input type="text" name="nome" placeholder="Digite seu Nome" value="<?php echo $resultado_msg_contato['nome']; ?>" >
        <label>Endereço</label>
        <input type="text" name="endereco" placeholder="Digite seu endereço" value="<?php echo $resultado_msg_contato['endereco']; ?>" >
        <label>Bairro</label>
        <input type="text" name="bairro" placeholder="Digite seu Bairro" value="<?php echo $resultado_msg_contato['bairro']; ?>" >
        <br>
        <label>Estado</label>
        <input type="text" name="estado" placeholder="Digite seu Estado" value="<?php echo $resultado_msg_contato['estado']; ?>" >
        <label>CPF</label>
        <input type="number" name="cpf" placeholder="Digite seu Cpf" value="<?php echo $resultado_msg_contato['cpf']; ?>" >
        <br>
        <label>Titulo</label>
        <input type="number" name="titulo" placeholder="Digite seu Titulo" value="<?php echo $resultado_msg_contato['titulo']; ?>" >
        <label>Profissional</label>
        <input type="number" name="profissional" placeholder="Digite sua Profissional" value="<?php echo $resultado_msg_contato['profissional']; ?>" >
        <label>Pis</label>
        <input type="number" name="pis" placeholder="Digite seu Pis" value="<?php echo $resultado_msg_contato['pis']; ?>" >
        <br>
        <label>Data De Nascimento</label>
        <input type="date" name="nascimento" placeholder="Digite sua Data de nascimento"value="<?php echo $resultado_msg_contato['nascimento']; ?>">
        <label>RGP</label>
        <input type="number" name="rgp" placeholder="Digite seu Rgp" value="<?php echo $resultado_msg_contato['rgp']; ?>" >
        <label>Nome Do Pai</label>
        <input type="text" name="nome_pai" placeholder="Digite seu Nome do pai " value="<?php echo $resultado_msg_contato['nome_pai']; ?>" >
        <br>
        <label>Nome Da Mãe</label>
        <input type="text" name="nome_mae" placeholder="Digite seu Nome da mae "value="<?php echo $resultado_msg_contato['nome_mae']; ?>" >
        <label>Nome Do Filho</label>
        <input type="text" name="dependente" placeholder="Digite seu Dependente" value="<?php echo $resultado_msg_contato['dependente']; ?>" >
        <label>Data Da Inscrição</label>
        <input type="date" name="data_ins" placeholder="Digite a Data de Inscricão "value="<?php echo $resultado_msg_contato['data_ins']; ?>">
        <label></label>
        <input type="number" name="insc_inss" placeholder="Digite a Inscrição do INSS"value="<?php echo $resultado_msg_contato['insc_inss']; ?>">
        <label>Inscrição do INSS</label>
        <input type="number" name="rg" placeholder="Digite seu RG" value="<?php echo $resultado_msg_contato['rg']; ?>" >
        <label>Estado Civil</label>
        <select name="estado_civil" value="<?php echo $resultado_msg_contato['estado_civil']; ?>" >
            <option value="Solteiro(A)">Solteiro(A)</option>
            <option value="Casado(A)">Casado(A)</option>
            <option value="Divorciado(A)">Divorciado(A)</option>
            <option value="Viuva(A)">Viuva(A)</option>
        </select>
        <br>
        <label>Assinatura Do Socio</label>
        <input type="text" name="assinatura_socio" value="<?php echo $resultado_msg_contato['assinatura_socio']; ?>"  >
        <label>Assinatura Do Presidente</label>
        <input type="text" name="assinatura_presidente" value="<?php echo $resultado_msg_contato['assinatura_presidente']; ?>"  >

        <input type="submit" name="enviar" value="Salvar Cadastro">

    </form>
    <?php
    require_once 'rodape.php';
    ?>
<?php

require_once 'bd/functions.php';
require_once 'bd/conexao.php';

// pega os dados do formuário
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
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
if (empty($nome) || empty($endereco) || empty($bairro)|| empty($estado) || empty($cpf) || empty($titulo) || empty($profissional) ||
    empty($pis) || empty($nascimento) || empty($rgp)|| empty($nome_pai) || empty($nome_mae) || empty($dependente) || empty($data_ins) || empty($insc_inss) ||
    empty($rg) || empty($estado_civil) || empty($assinatura_socio) || empty($assinatura_presidente))
{
    echo "Volte e preencha todos os campos";
    exit;
}

// insere no banco
$PDO = db_connect();
$sql_msg_contatos = "UPDATE pescadores SET nome = :nome, endereco = :endereco, bairro = :bairro,estado = estado,:identidade = identidade,:cpf = cpf,:titulo = titulo,:profissional = profissional,:pis = pis,:nascimento = nascimento,:rgp = rgp,:nome_pai = nome_pai,:nome_mae = nome_mae,:dependente = dependente,:data_ins = data_ins,:insc_inss = insc_inss,:rg = rg,:estado_civil = estado_civil,:assinatura_socio = assinatura_socio,:assinatura_presidente = assinatura_presidente WHERE id = :id";
$insert_msg_contato = $PDO->prepare($sql_msg_contatos);
$insert_msg_contato->bindParam(':matricula', $matricula);
$insert_msg_contato->bindParam(':nome', $nome);
$insert_msg_contato->bindParam(':endereco', $endereco);
$insert_msg_contato->bindParam(':bairro', $bairro);
$insert_msg_contato->bindParam(':estado', $estado);
$insert_msg_contato->bindParam(':identidade', $identidade);
$insert_msg_contato->bindParam(':cpf', $cpf);
$insert_msg_contato->bindParam(':titulo', $titulo);
$insert_msg_contato->bindParam(':profissional', $profissional);
$insert_msg_contato->bindParam(':pis', $pis);
$insert_msg_contato->bindParam(':nascimento', $nascimento);
$insert_msg_contato->bindParam(':rgp', $rgp);
$insert_msg_contato->bindParam(':nome_pai', $nome_pai);
$insert_msg_contato->bindParam(':nome_mae', $nome_mae);
$insert_msg_contato->bindParam(':dependente', $dependente);
$insert_msg_contato->bindParam(':data_ins', $data_ins);
$insert_msg_contato->bindParam(':insc_inss', $insc_inss);
$insert_msg_contato->bindParam(':rg', $rg);
$insert_msg_contato->bindParam(':estado_civil', $estado_civil);
$insert_msg_contato->bindParam(':assinatura_socio', $assinatura_socio);
$insert_msg_contato->bindParam(':assinatura_presidente', $assinatura_presidente);
$insert_msg_contato->bindParam(':id', $id, PDO::PARAM_INT);

if ($insert_msg_contato->execute()){
    header('Location:../armazenamento.php');
}else{
    echo "Erro ao cadastrar";
    print_r($insert_msg_contato->errorInfo());
}
?>
</body>
</html>