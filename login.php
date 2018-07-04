<?php
include"cabeçalho.php";
?>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login_autenticação.php" method="POST">
<!-- 					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
				-->
				<span class="login100-form-title p-b-34 p-t-27">
					Entrar
				</span>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="login" placeholder="Nome do Usuario">
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="password" name="senha" placeholder="Senha">
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
		</div>
	</div>
</div>
<?php
include "rodape.php"
?>

</body>
</html>