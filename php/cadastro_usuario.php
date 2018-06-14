<?php
include 'menu.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>FORMULARIO</title>
    <link rel="stylesheet" type="text/css" href="../css/estilocadastrocliente.css">
    <meta charset="utf-8">
</head>
<body>
    <?php
    // session_start();
    if($_SESSION['logado']==True){
        echo "<script> window.location='usuario.php'</script>'";
    }
    ?>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card card-container">
            <h1>Cadastro Usuario</h1>
            <p id="profile-name" class="profile-name-card"></p>

            <form class="form-signin" action="bd/cadastrarUsuario.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>

                <input type="text" id="inputEmail" class="form-control" name="nome" placeholder="Nome"
                required autofocus  maxlength="40">
                <input type="text" id="inputEmail" class="form-control" name="matricula" placeholder="matricula"
                required autofocus  maxlength="25">
                <input type="text" id="inputEmail" class="form-control" name="disciplina" placeholder="disciplina" required autofocus></p>
                <input type="text" id="inputEmail" class="form-control" name="email" placeholder="E-mail"
                required autofocus  maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                <input type="text" id="inputEmail" class="form-control" name="login" placeholder="Login"
                required autofocus  maxlength="20">
                <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha"
                required  maxlength="10">

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Cadastrar</button>
            </form>

        </div>
    </div>
</body>
</html>