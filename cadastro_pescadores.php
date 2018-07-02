<?php
include "cabeçalho.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Colônia de Pescadores Z-10 - Itapissuma</h1>
    <h2>Rua José Gonçalves, 87 - CEP 53.700-000 - Itapissuma -PE</h2>
    <h2>Fone: 3548-1998</h2>
    <form action="bd/cadastrar_pescadores.php" method="POST">
     <label>CADASTRO MAT. N</label>
        <input type="number" name="matricula">

        <h1>Dados Pessoais e Profissionais</h1>
        <label>Nome</label>
        <input type="text" nome="nome" placeholder="Digite seu Nome">
        <label>Endereço</label>
        <input type="text" nome="endereco" placeholder="Digite seu endereço">
        <label>Bairro</label>
        <input type="text" nome="bairro" placeholder="Digite seu Bairro">
        <br>
        <label>Estado</label>
        <input type="text" nome="estado" placeholder="Digite seu Estado">
        <label>Identidade</label>
        <input type="number" nome="identidade" placeholder="Digite seu Identidade">
        <label>CPF</label>
        <input type="number" nome="cpf" placeholder="Digite seu Cpf">
        <br>
        <label>Titulo</label>
        <input type="number" nome="titulo" placeholder="Digite seu Titulo">
        <label>Profissional</label>
        <input type="number" nome="profissional" placeholder="Digite sua Profissional">
        <label>Pis</label>
        <input type="number" nome="pis" placeholder="Digite seu Pis">
        <br>
        <label>Data De Nascimento</label>
        <input type="date" nome="nascimento" placeholder="Digite sua Data de nascimento">
        <label>RGP</label>
        <input type="number" nome="rgp" placeholder="Digite seu Rgp">
        <label>Nome Do Pai</label>
        <input type="text" nome="nome_pai" placeholder="Digite seu Nome do pai ">
        <br>
        <label>Nome Da Mãe</label>
        <input type="text" nome="nome_mae" placeholder="Digite seu Nome da mae ">
        <label>Nome Do Filho</label>
        <input type="text" nome="dependente" placeholder="Digite seu Dependente">
        <label>Data Da Inscrição</label>
        <input type="date" nome="data_ins" placeholder="Digite a Data de Inscricão ">
        <label></label>
        <input type="number" nome="insc_inss" placeholder="Digite a Inscrição do INSS">
        <label>Inscrição do INSS</label>
        <input type="number" nome="rg" placeholder="Digite seu RG">
        <label>Estado Civil</label>
        <select name="estado_civil">
            <option value="Solteiro(A)">Solteiro(A)</option>
            <option value="Casado(A)">Casado(A)</option>
            <option value="Divorciado(A)">Divorciado(A)</option>
            <option value="Viuva(A)">Viuva(A)</option>
        </select>
        <br>
        <label>Assinatura Do Socio</label>
        <input type="text" nome="assinatura_socio">
        <label>Assinatura Do Presidente</label>
        <input type="text" nome="assinatura_presidente">

        <input type="submit" name="enviar" value="Salvar Cadastro">

    </form>
<?php include 'rodape.php'; ?>
</body>
</html>