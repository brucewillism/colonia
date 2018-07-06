<?php
include"cabeçalho.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastra-se</title>
	<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/util1.css">
<link rel="stylesheet" type="text/css" href="css/main1.css">
<link rel="stylesheet" type="text/css" href="css/blog-home.css">
</head>
<body>
<form class="login100-form validate-form" action="bd/cadastrarUsuario.php" method="POST">   
     <div class="login-box">
    <img src="img/1avatar.png" class="avatar">
        <h1>Cadastre-se</h1>
            <form>
            <p>Nome </p>
            <input type="te" name="login" placeholder="Seu Nome Completo">
			<p>Nome de Usuário</p>
            <input type="uso" name="usuario" placeholder="Seu Login">
			<p>Email </p>
            <input type="em" name="Email" placeholder="Seu email">
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Sua Senha">



            <input type="submit" name="submit" value="Login">
            <a href="#">Esqueçeu sua Senha?</a>    
            </form>
        
        
        </div>
</div>
	</div>
		</div>
			
			</div>


</body>
</html>