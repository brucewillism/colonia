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
<div id="lateral">
<div id="menu">

<h3 class="link-titulo">Institucional</h3>
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

<h3 class="link-titulo">Associado</h3>
    <ul class="box">
        <li><a href="#">Associe-se</a></li>
        <li><a href="#">Benefícios</a></li>
        <li><a href="#">Deveres</a></li>
        <li><a href="#">Sistema de Cobrança</a></li>
    </ul>

<h3 class="link-titulo">Área Restrita</h3>
    <ul class="box">
        <li><a href="#">Atualização de Cadastro</a></li>
        <li><a href="#">Situação Geral e Financeira</a></li>
        <li><a href="#">Emissão de 2 Via de Boleto</a></li>
        <li><a href="#">Rastreamento Carteira de Pesca</a></li>
        <li><a href="#">Seguro Desemprego</a></li>
    </ul>


</div>
</div id="link">  <div>
</div>