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

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="bd/cadastrarUsuario.php" method="POST">
					<span class="login100-form-title p-b-59">
						Inscrever-se
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Nome completo</span>
						<input class="input100" type="text" name="nome" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Nome de usuário</span>
						<input class="input100" type="text" name="login" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha" placeholder="Digite sua Senha">
						<span class="focus-input100"></span>
					</div>

					<!-- <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repita a senha</span>
						<input class="input100" type="text" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
				--><div class="container-login100-form-btn">
					<input class="login100-form-btn" type="submit" value="Salvar">

				</div>
			</form>
		</div>
	</div>
</div>
<?php
include "rodape.php"
?>
</body>
</html>