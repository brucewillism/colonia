<?php
include '../menu.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
<!--<link rel="shortcut icon" href="imagem/Stokage.png" type="image/x-png">
 --><link rel="stylesheet" type="text/css" href="../css/estilocadastroproduto.css">
    <link rel="stylesheet"  href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <h1>CADASTRO DE IDENTIFICAÇÃO E QUALIFICAÇÃO DOS USUARIOS DOS TERRITORIOS PESQUEIROS EM AREA DA UNIÃO</h1>
    <h2>Colonia dos Pescadores Z-10 de Itapissuma(PE)</h2>
    <h2>Fone: 3548-1998</h2>
    <form action="../bd/cadastrar_pescadores_caicara.php" method="POST">
        <h1>CADASTRO DE USUARIOS DE CAIÇARAS - ITAPISSUMA</h1>
        <input type="text" nome="nome" placeholder="Digite seu Nome" >
        <input type="text" nome="endereco" placeholder="Digite seu endereço" >
        <input type="text" nome="bairro" placeholder="Digite seu Bairro" >
        <input type="text" nome="estado" placeholder="Digite seu Estado" >
        <input type="text" nome="indentidade" placeholder="Digite seu Identidade" >
        <input type="text" nome="cpf" placeholder="Digite seu Cpf" >
        <input type="text" nome="nascimento" placeholder="Digite sua Data de Nascimento" >
        <input type="text" nome="rgp" placeholder="Digite seu Rgp" >
        <input type="text" nome="nome_pai" placeholder="Digite seu Nome do pai" >
        <input type="text" nome="nome_mae" placeholder="Digite seu Nome da mae" >
        <input type="text" nome="dependente" placeholder="Digite seu Dependente" >
        <input type="text" nome="data ins" placeholder="Digite a Data de Inscrição" >
        <input type="text" nome="insc_inss" placeholder="Digite a Inscrição do INSS" >
        <input type="text" nome="rg" placeholder="Digite seu RG" >
        <select name="estado_civil">
            <option name="Solteiro(A)" value="Solteiro(A)">Solteiro(A)</option>
            <option name="Casado(A)" value="Casado(A)">Casado(A)</option>
            <option name="Divorciado(A)" value="Divorciado(A)">Divorciado(A)</option>
            <option name="Viuvo(A)" value="Viuva(A)">Viuva(A)</option>
            <option name="Viuvo(A)" value="Viuva(A)">Viuva(A)</option>
        </select>
        <input type="text" nome="assinatura_socio" >
        <input type="text" nome="assinatura_presidente" >

        <input type="submit" name="Salvar" value="Salvar">

    </form>
<?php include '../php/rodape.php'; ?>
</body>
</html>