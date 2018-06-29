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
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo_menu_lateral.css">
    <title></title>
</head>

<div id="lateral">
<div id="menu">
<h4 class="link-titulo">Institucional</h4>
    <ul class="box">
        <li><a href="#">Historia</a></li>
        <li><a href="#">Infraestrutura</a></li>
        <li ><a href="#">Nossa Equipe</a></li>
        <li ><a href="#">Diretoria Atual</a></li>
        <li ><a href="#">Demonstrativo Contábil</a></li>
        <li ><a href="#">Organograma</a></li>
        <li ><a href="#">Coluna do Pescador</a></li>
        <li ><a href="#">Coordenação nos Municípios</a></li>
        <li ><a href="#">Palavra da Diretoria</a></li>
        <li ><a href="#">Regimento</a></li>
        <li ><a href="#">Estatuto</a></li>
    </ul>

<h4 class="link-titulo">Associado</h4>
    <ul class="box">
        <li><a href="#">Associe-se</a></li>
        <li><a href="#">Benefícios</a></li>
        <li><a href="#">Deveres</a></li>
        <li><a href="#">Sistema de Cobrança</a></li>
    </ul>

<h4 class="link-titulo">Área Restrita</h4>
    <ul class="box">
    <?php if($_SESSION['logado'] == True): ?>
          <li><a href="sistema_de_pescadores/cadastro_pescadores.php">Cadastra Pescadores <i class="fa fa-cloud-upload" aria-hidden="true"></i></a></li>
          <li><a href="sistema_de_pescadores/cadastro_pescadores_caicara.php">Cadastra Pescadores Caiçaras <i class="fa fa-cloud-upload" aria-hidden="true"></i></a></li>
          <li><a href="armazenamento.php">Pescadores <i class="fa fa-map-o" aria-hidden="true"></i></a></li>
    <?php endif ?>
    </ul>

</div>
</div id="link">  <div>
</div>