<?php
include 'cabeçalho.php';
require_once 'bd/conexao.php';

// pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

//Valida a variavel da URL
if (empty($id)){
    echo "ID para alteração não definido";
    exit;
}
$stmt = $conn->prepare = "SELECT id,  matricula, nome, endereco, bairro, estado, cpf, titulo, profissional, pis, nascimento, rgp, nome_pai, nome_mae, dependente, data_ins, insc_inss, rg, orgao, assinatura_socio, assinatura_presidente, id_categoria, id_estado FROM pescadores WHERE id='$id'";
$stmt = $conn->prepare($stmt);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$resultado_msg_contato = $stmt->fetch(PDO::FETCH_ASSOC);

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
    <form action="editar.php?id=<?php echo $id; ?>" method="POST">
       <div id="div">
           <br>
           <br>
           <br>
           <p id="titulo">Dados Pessoais Dos Pescadores</p>
           <p id ="mat">CADASTRO MAT. N</p>
           <input type="number" name="matricula"  value="<?php echo $resultado_msg_contato['matricula']; ?>" >
           <br></br>
           <label>Nome</label>
           <input type="text" name="nome" placeholder="Digite Seu Nome Completo"  value="<?php echo $resultado_msg_contato['nome']; ?>" ><br><br>
           <label>Endereço</label>
           <input type="text"  name="endereco" placeholder="Digite Seu endereço"  value="<?php echo $resultado_msg_contato['endereco']; ?>" >
           <br>
           <label>Bairro</label>
           <input type="text"  name="bairro" placeholder="Digite Seu Bairro"  value="<?php echo $resultado_msg_contato['bairro']; ?>" >
           <br><br><label>Estado</label>
           <input type="text"  name="estado" placeholder="Digite Seu Bairro"  value="<?php echo $resultado_msg_contato['estado']; ?>" >
           <br>
           <label>CPF</label>
           <input type="number"  name="cpf" placeholder="Digite Seu CPF"  value="<?php echo $resultado_msg_contato['cpf']; ?>" >
           <label>Categoria</label>
           <select name="categoria" >
            <?php
            include 'bd/conexao.php';
            $sql = "SELECT * FROM categorias";
            foreach ($conn->query($sql) as $registro) {
                $id = $registro['id'];
                $nome = $registro['nome_cat'];
                echo "<option value='".$id."'>".$nome."</option>";
            }
            ?>
        </select>

        <label>Titulo</label>
        <input type="number"  name="titulo" placeholder="Digite Seu Titulo">
        <label>Profissional</label>
        <input type="number"  name="profissional" placeholder="Digite Seu Profissional">
        <br>
        <label>PIS</label>
        <input type="number"  name="pis" placeholder="Digite Seu Pis">
        <label>Estado Civil</label>
        <select name="estado_civil" >
            <?php
            include 'bd/conexao.php';
            $sql = "SELECT * FROM estado_civil";
            foreach ($conn->query($sql) as $registro) {
                $id = $registro['id'];
                $nome = $registro['nome_est'];
                echo "<option value='".$id."'>".$nome."</option>";
            }
            ?>
        </select><br>
        <label>Nome Do Pai</label>
        <input type="pai"  name="nome_pai" placeholder="Digite o nome do pai"  value="<?php echo $resultado_msg_contato['nome_pai']; ?>" ><br>
        <label>Nome Da Mãe</label>
        <input type="mae" name="nome_mae" placeholder="Digite o nome da mae"  value="<?php echo $resultado_msg_contato['nome_mae']; ?>" ><br>
        <label>Nome Do Filho</label>
        <input type="filho" name="dependente" placeholder="Digite Seu Dependente" value="<?php echo $resultado_msg_contato['dependente']; ?>" ><br><br>
        <p id="titulo">Dados Profissionais Dos Pescadores</p>
        <label>Data De Nascimento</label>
        <input type="date" name="nascimento" placeholder="Digite Sua Data de nascimento" value="<?php echo $resultado_msg_contato['nascimento']; ?>" ><br></br>
        <label>Órgão Exp</label>
        <input type="org" name="orgao" placeholder="Digite seu Órgão Expedidor" value="<?php echo $resultado_msg_contato['orgao']; ?>" ><br></br>
        <label>RGP</label>
        <input type="number" name="rgp" placeholder="Digite Seu RGP" value="<?php echo $resultado_msg_contato['rgp']; ?>" >
        <label>Data Da Inscrição</label>
        <input type="date" name="data_ins" placeholder="Digite a Data de Inscricão" value="<?php echo $resultado_msg_contato['data_ins']; ?>" ><br></br>
        <label>Inscrição do INSS</label>
        <input type="number"  name="insc_inss" placeholder="Digite a Inscrição do INSS" value="<?php echo $resultado_msg_contato['insc_inss']; ?>" >
        <label>Inscrição do RG</label>
        <input type="number" name="rg" placeholder="Digite Seu RG" value="<?php echo $resultado_msg_contato['rg']; ?>" >
        <input type="submit" name="enviar" value="Salvar Cadastro">

    </form>
</section>
</div>
<?php
require_once 'rodape.php';
?> 