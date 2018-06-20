<?php
include '../php/menu.php';
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
    <h1>Colônia de Pescadores Z-10 - Itapissuma</h1>
    <h2>Rua José Gonçalves, 87 - CEP 53.700-000 - Itapissuma -PE</h2>
    <h2>Fone: 3548-1998</h2>
    <form action="../bd/cadastrar_pescadores.php" method="POST">
        <input type="number" name="matricula">CADASTRO MAT. N
        <h1>Dados Pessoais e Profissionais</h1>
        <input type="text" nome="nome" placeholder="Digite seu Nome" >
        <input type="text" nome="endereco" placeholder="Digite seu endereço" >
        <input type="text" nome="bairro" placeholder="Digite seu Bairro" >
        <input type="text" nome="estado" placeholder="Digite seu Estado" >
        <input type="number" nome="indentidade" placeholder="Digite seu Identidade" >
        <input type="number" nome="cpf" placeholder="Digite seu Cpf" >
        <input type="number" nome="titulo" placeholder="Digite seu Titulo" >
        <input type="number" nome="profissional" placeholder="Digite sua Profissional" >
        <input type="number" nome="pis" placeholder="Digite seu Pis" >
        <input type="number" nome="nascimento" placeholder="Digite sua Data de Nascimento" >
        <input type="number" nome="rgp" placeholder="Digite seu Rgp" >
        <input type="text" nome="nome_pai" placeholder="Digite seu Nome do pai" >
        <input type="text" nome="nome_mae" placeholder="Digite seu Nome da mae" >
        <input type="text" nome="dependente" placeholder="Digite seu Dependente" >
        <input type="number" nome="data ins" placeholder="Digite a Data de Inscrição" >
        <input type="number" nome="insc_inss" placeholder="Digite a Inscrição do INSS" >
        <input type="number" nome="rg" placeholder="Digite seu RG" >
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
<?php include '../php/rodape.php'; ?>
</body>
</html>