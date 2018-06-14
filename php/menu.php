<?php
session_start();
if(!isset($_SESSION['logado'])){
  $_SESSION['logado'] = [];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Colonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<!--   <link rel="shortcut icon" href="imagem/Stokage.png" type="image/x-png">
 --><link rel="stylesheet"  href="../recursos/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">

       <a class="navbar-brand" href="../index.php">Colonia</a>
     </div>
     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <?php if ($_SESSION['logado']==True): ?>

          <li> <a href="../sitema_de_pescadores/cadastro_pescadores.php" class="fa fa-book">Cadastrar Pescadores</a></li>
          <li> <a href="../php/armazenamento.php" class="fa fa-area-chart">Pescadores</a></li>
        <?php endif ?>
        <li><a href="../php/sobre.php" class="fa fa-users">Quem somos</a></li>
        <li> <a href="../php/contatos.php" class="fa fa-address-book-o" >Contato</a></li>

        <?php
        if($_SESSION['logado'] == True){
          $llogin = $_SESSION['login'];
          $ssenha = $_SESSION['senha'];
        require_once '../bd/conexao.php';

        $sql ="SELECT * FROM usuario WHERE USER_LOGIN = '$llogin' and USER_SENHA = '$ssenha'";
        $stmt = $conn->query($sql);
        foreach ($stmt as $dados) {
          echo "<li><div class='dropdown'>
          <div class='dropdown-content'>
          <li><a href='../sistema_de_login/logout.php'>Bem Vindo $llogin
          Sair <i class='fa fa-sign-out' aria-hidden='true'></i></a></li>
          </div>
          </div></li>";
      }
  }
        ?>
        <?php
        if($_SESSION['logado'] == False){
          echo "<li><a href='../sistema_de_login/login.php'>Login <i class='fa fa-sign-in fa-1x' aria-hidden='true'></i></a></li>";
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
</header>

<?php
if($_SESSION['logado'] == True){
  echo "<li><a href='../sistema_de_login/logout.php'>Sair <i class='fa fa-power-off' aria-hidden='true'></i></a></li>";
}
?>