<?php
include "cabeçalho.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
      #div {
        text-align: left;
      }
      #div.input{
        color: white;
      }

    </style>
</head>
<body>
    <form action="bd/cadastrar_pescadores.php" method="POST">
       <div id="div">
           <br>
           <br>
           <br>
           <p id="titulo">Dados Pessoais Dos Pescadores</p>
           <p id ="mat">CADASTRO MAT. N</p>
           <input type="number" name="matricula">
           <br></br>
           <label>Nome</label>
           <input type="text" name="nome" placeholder="Digite Seu Nome Completo" required><br><br>
           <label>Endereço</label>
           <input type="text"  name="endereco" placeholder="Digite Seu endereço" required>
           <br>
           <label>Bairro</label>
           <input type="text"  name="bairro" placeholder="Digite Seu Bairro" required>
           <br><br><label>estado</label>
           <input type="text"  name="estado" placeholder="Digite Seu Bairro" required>
           <br>
           <label>CPF</label>
           <input type="number"  name="cpf" placeholder="Digite Seu CPF" required>
           <label>Categoria</label>
           <select name="categoria" required>
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
        <select name="estado_civil" required>
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
        <input type="pai"  name="nome_pai" placeholder="Digite o nome do pai" required><br>
        <label>Nome Da Mãe</label>
        <input type="mae" name="nome_mae" placeholder="Digite o nome da mae" required><br>
        <label>Nome Do Filho</label>
        <input type="filho" name="dependente" placeholder="Digite Seu Dependente"required><br><br>
        <p id="titulo">Dados Profissionais Dos Pescadores</p>
        <label>Data De Nascimento</label>
        <input type="date" name="nascimento" placeholder="Digite Sua Data de nascimento"required><br></br>
        <label>Órgão Exp</label>
        <input type="org" name="orgao" placeholder="Digite seu Órgão Expedidor"required><br></br>
        <label>RGP</label>
        <input type="number" name="rgp" placeholder="Digite Seu RGP"required>
        <label>Data Da Inscrição</label>
        <input type="date" name="data_ins" placeholder="Digite a Data derequired Inscricão"required><br></br>
        <label>Inscrição do INSS</label>
        <input type="number"  name="insc_inss" placeholder="Digite a Inscrição dorequired INSS"required>
        <label>Inscrição do RG</label>
        <input type="number" name="rg" placeholder="Digite Seu RG"required><br><br>
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