<?php
session_start();
$host = "localhost";
$banco = "pibex";
$user = "root";
$pass = "123";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autenticação</title>
	<script type="text/javascript">
		function loginsucess(){
			window.location='../index.php';
		}
		function loginfailed(){
			window.location='../sistema_de_login/login.php';
		}
	</script>
</head>
<body>

<?php
$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = mysqli_query($conexao,"SELECT * FROM usuario WHERE USER_LOGIN = '$login' and USER_SENHA = '$senha'") or die(mysql_error('Login ou senha errado'));
$row = mysqli_num_rows($sql);
$dados = mysqli_fetch_array($sql);
if($row > 0){
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	$_SESSION['logado'] = True;
	$_SESSION['user_id'] = $dados['id'];
	echo "<script>loginsucess()</script>";

}
else{
	echo "<script>loginfailed()</script>";
}
?>

</body>
</html>