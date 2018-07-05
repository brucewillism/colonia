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
        <p id="titulo">Dados Pessoais Dos Pescadores</p>
        <p id ="mat">CADASTRO MAT. N</p>
        <input type="number" name="matricula">
        <br></br>
        <label>Nome</label>
        <input type="text" name="nome" placeholder="Digite Seu Nome Completo" required><br><br>
        <label>Endereço</label>
        <input type="end" name="endereco" placeholder="Digite Seu endereço" required>
        <label>Bairro</label>
        <input type="bai" name="bairro" placeholder="Digite Seu Bairro" required><br><br>
        <label>Identidade</label>
        <input type="id" name="identidade" placeholder="Digite Sua Identidade">
        <label>CPF</label>
        <input type="cpf" name="cpf" placeholder="Digite Seu CPF" required>
        <br><br>
        <label>Estado Civil</label>
        <select name="estado_civil">
            <option value="Solteiro(A)">Solteiro(A)</option>
            <option value="Casado(A)">Casado(A)</option>
            <option value="Divorciado(A)">Divorciado(A)</option>
            <option value="Viuva(A)">Viuva(A)</option>
        </select><br>
        <label>Nome Do Pai</label>
        <input type="pai" name="nome_pai" placeholder="Digite o nome do pai"><br>
        <label>Nome Da Mãe</label>
        <input type="mae" name="nome_mae" placeholder="Digite o nome da mae"><br> 
        <label>Nome Do Filho</label>
        <input type="filho" name="dependente" placeholder="Digite Seu Dependente"><br><br>
        <p id="titulo">Dados Profissionais Dos Pescadores</p>
        <label>Data De Nascimento</label>
        <input type="date" name="nascimento" placeholder="Digite Sua Data de nascimento"><br></br>
        <label>Órgão Exp</label>
        <input type="org" name="Órgão" placeholder="Digite seu Órgão Expedidor"><br></br>
        <label>RGP</label>
        <input type="number" name="rgp" placeholder="Digite Seu RGP">
        <label>Data Da Inscrição</label>
        <input type="date" name="data_ins" placeholder="Digite a Data de Inscricão "><br></br>
        <label>Inscrição do INSS</label>
        <input type="inss" name="insc_inss" placeholder="Digite a Inscrição do INSS">
        <label>Inscrição do RG</label>
        <input type="rg" name="rg" placeholder="Digite Seu RG"><br><br>
        <label>Assinatura Do Socio</label>
        <input type="text" name="assinatura_socio"><br><br>
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