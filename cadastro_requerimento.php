<?php
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagem/Stokage.png" type="image/x-png">
    <link rel="stylesheet" type="text/css" href="../css/estilocadastroproduto.css">

    <link rel="stylesheet"  href="./font-awesome-4.7.0/css/font-awesome.min.css">


    <title>Tabela</title>
</head>
<body style="text-align:center;">
    <br>
    <br>
    <form action="bd/cadastrar_requerimento.php" method="POST" class="formulario">

            <p>Nome Do Produto*</p>
            <input type="text" name="nome" placeholder="Digite o nome do item." required/><br>
            <p>Quantidade em estoque*</p>
            <input type="text" name="quantidade" placeholder="Digite a Quantidade." required/><br>
            <p>Preço*</p>
            <input type="numero" name="preco" placeholder="Digite o Preço." maxlength="9" required/><br>

            <p>Insira uma imagem</p>
            <input type="file" name="imagem">

            <p>Selecione a Categoria Do Produto*</p>
            <select name="categorias">
            <?php
            include 'bd/conexao.php';
            $sql = "SELECT * FROM categorias";
            foreach ($conn->query($sql) as $registro) {
                $id = $registro['id'];
                $nome = $registro['nome_cat'];
                echo "<option value='".$id."'>".strtoupper($nome)."</option>";
            }
            ?>
            </select>
            <input type="submit" value="Salvar"> <br>

    </form>


    <?php
    include 'rodape.php';
    ?>
    </body>
    </html>