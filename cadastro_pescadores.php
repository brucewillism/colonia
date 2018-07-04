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
    <form action="bd/cadastrar_pescadores.php" method="POST">
         <div class="container" id="corpo">
        <p id="titulo">Dados Pessoais & Profissionais Dos Pescadores</p>
        <p id ="mat">CADASTRO MAT. N</p>
        <input type="number" name="matricula">
        <br></br>
        <label>Nome</label>
        <input type="text" name="nome" placeholder="Digite Seu Nome" required>
        <label>Endereço</label>
        <input type="text" name="endereco" placeholder="Digite Seu endereço" required><br></br>
        <label>Bairro</label>
        <input type="text" name="bairro" placeholder="Digite Seu Bairro" required>
        <label>Estado</label>
        <input type="text" name="estado" placeholder="Digite Seu Estado">
        <br></br>
        <label>CPF</label>
        <input type="number" name="cpf" placeholder="Digite Seu CPF" required>
        <br>
        <label>Data De Nascimento</label>
        <input type="date" name="nascimento" placeholder="Digite Sua Data de nascimento"><br></br>
        <label>RGP</label>
        <input type="number" name="rgp" placeholder="Digite Seu RGP">
        <label>Nome Do Pai</label>
        <input type="text" name="nome_pai" placeholder="Digite Seu Nome do pai ">
        <br>
        <label>Nome Da Mãe</label>
        <input type="text" name="nome_mae" placeholder="Digite Seu Nome da mae ">
        <label>Nome Do Filho</label>
        <input type="text" name="dependente" placeholder="Digite Seu Dependente">
        <label>Data Da Inscrição</label>
        <input type="date" name="data_ins" placeholder="Digite a Data de Inscricão "><br></br>
        <label>Inscrição do INSS</label>
        <input type="number" name="insc_inss" placeholder="Digite a Inscrição do INSS">
        <label>Inscrição do RG</label>
        <input type="number" name="rg" placeholder="Digite Seu RG">
        <label>Estado Civil</label>
        <select name="estado_civil">
            <option value="Solteiro(A)">Solteiro(A)</option>
            <option value="Casado(A)">Casado(A)</option>
            <option value="Divorciado(A)">Divorciado(A)</option>
            <option value="Viuva(A)">Viuva(A)</option>
        </select>
        <label>Assinatura Do Socio</label>
        <input type="text" name="assinatura_socio"><br>
        <label>Assinatura Do Presidente</label>
        <input type="text" name="assinatura_presidente">

        <input type="submit" name="enviar" value="Salvar Cadastro">

    </form>
    </section>
    </div>
    <?php
    include "rodape.php"
    ?>
</body>
</html>