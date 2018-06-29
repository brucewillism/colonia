<?php
include "../menu.php";
include '../menu_lateral.php';

?>

	<title>Login</title>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login_autenticacao.php" method="POST">
<!-- 					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
 -->
					<span class="login100-form-title p-b-34 p-t-27">
						Entrar
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="login" placeholder="Nome do Usuario">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
 -->


				<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>

					</div>
 				</form>
 				<form class="login100-form validate-form" action="../sistema_de_cadastro_usuario/cadastro_usuario.php" method="POST">
					<div class="container-login100-form-btn">
				   	<button class="login100-form-btn" type="submit"> Cadastre-se!</button>
					</div>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

</body>
</html>