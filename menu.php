<?php
session_start();
if(!isset($_SESSION['logado'])){
  $_SESSION['logado'] = [];
}
if(isset($_SESSION["login"]) && isset($_SESSION["senha"])){
  $llogin = $_SESSION['login'];
  $ssenha = $_SESSION['senha'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/recursos/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/recursos/font-awesome/css/font-awesome.min.css">
  <script src="/recursos/jquery/jquery-3.2.1.min.js"></script>
  <script src="/recursos/bootstrap/js/bootstrap.min.js"></script>
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "/imagem/favicon.ico"/>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container-fluid">
      <div class="navbar-header">
        <p><a href="../index.php"><img src="../imagem/logotipo2.png" width="110" height="50" alt="logo"></a>

      </div>

      <ul class="nav navbar-nav navbar-right">
        <!-- <?php if($_SESSION['logado'] == True): ?>
          <li><a href="sistema_de_pescadores/cadastro_pescadores.php">Cadastra Pescadores <i class="fa fa-cloud-upload" aria-hidden="true"></i></a></li>
          <li><a href="sistema_de_pescadores/cadastro_pescadores_caicara.php">Cadastra Pescadores Caiçaras <i class="fa fa-cloud-upload" aria-hidden="true"></i></a></li>
          <li><a href="armazenamento.php">Pescadores <i class="fa fa-map-o" aria-hidden="true"></i></a></li>

        <?php endif ?>
         --><li><a href="../contatos.php">Contatos <i class="fa fa-address-book-o" aria-hidden="true"></i></a></li>
        <li><a href="../sobre.php">Quem somos <i class="fa fa-users" aria-hidden="true"></i></a></li>

      <?php
        if($_SESSION['logado'] == True):
          $llogin = $_SESSION['login'];
          $ssenha = $_SESSION['senha'];
          require_once'bd/conexao.php';

          $sql ="SELECT * FROM usuario WHERE USER_LOGIN = '$llogin' and USER_SENHA = '$ssenha'";
          $stmt = $conn->query($sql);
          foreach ($stmt as $dados) {
            echo "
            <li><a href='../sistema_de_login/logout.php'>Bem Vindo $llogin
            Sair <i class='fa fa-sign-out' aria-hidden='true'></i></a></li>";
          }

          ?>

          <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">
              <ul class="dropdown-menu">
               <li><a href="../sistema_de_login/logout.php">Sair <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
             </ul>
           </li>
         </ul>

       <?php else:
        echo "<li><a href='../sistema_de_cadastro_usuario/cadastro_usuario.php'>Cadastre-se <span class='glyphicon glyphicon-user'></span> </a></li>
        <li><a href='../sistema_de_login/login.php'>Entrar <span class='glyphicon glyphicon-log-in'></span></a></li>";
      endif
      ?>
      <li>
        <form action="#" method="POST">
          Pesquisar
            <input type="text" name="pesquisa" placeholder="pesquisar" required/>
            <input type="submit" value="Pesquisar"></input>
        </form></li>
    </ul>
  </div>
</nav>