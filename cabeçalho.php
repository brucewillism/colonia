<?php
require_once'bd/conexao.php';
if(!isset($_SESSION['logado'])){
  $_SESSION['logado'] = [];
}
if(isset($_SESSION["login"]) && isset($_SESSION["senha"])){
  $llogin = $_SESSION['login'];
  $ssenha = $_SESSION['senha'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "/imagem/favicon.ico"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Home</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/blog-home.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css">
<link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js"></script>

<link rel="stylesheet" href="style.css">
<script type="text/javascript">
  $(document).ready(function() {

    $('#tabela').DataTable( {
      "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
    },
        responsive: true,
        "paging":   true,
        "ordering": true,
        "info":     true
        
    } );

      // Delete a record
     $('.deletar').click(function()
    {
      var id = $(this).attr('id');
      var data = 'id=' + id ;
        var parent = $(this).parent().parent();
        if (confirm("Tem certeza que deseja deletar este Fornecedor?"))
        {           
            $.ajax(
            {
                   type: "POST",
                   url: 'deletar_for.php',
                   data:{id: id},
                   cache: false,
                   success: function()
                   {
                    parent.fadeOut('fast', function() {$(this).remove();});
                   }
             });
        }
    });
     $('.deletar-pag').click(function()
    {
      var id = $(this).attr('id');
      var data = 'id=' + id ;
        var parent = $(this).parent().parent();
        if (confirm("Tem certeza que deseja deletar este Pagamento?"))
        {           
            $.ajax(
            {
                   type: "POST",
                   url: 'deletar_pag.php',
                   data:{id: id},
                   cache: false,
                   success: function()
                   {
                    parent.fadeOut('fast', function() {$(this).remove();});
                   }
             });
        }
    }); 

    
} );
</script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <p><a class="navbar-brand" href="index.php"><img src="imagem/logo.png" height="25" width="40">Colônia De Pescadores Z-10</a></p>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="sobre.php">Quem Somos</a>
          </li>
          <?php
          if($_SESSION['logado'] == True):
            $llogin = $_SESSION['login'];
            $ssenha = $_SESSION['senha'];

            $sql ="SELECT * FROM usuario WHERE USER_LOGIN = '$llogin' and USER_SENHA = '$ssenha'";
            $stmt = $conn->query($sql);
            foreach ($stmt as $dados) {
              echo "
              <li class= 'nav-item'><a class='nav-link'>Bem Vindo $llogin</a>
              <li class= 'nav-item'><a class='nav-link' href='logout.php'>Sair</a></li>";
            }

            ?>
          <?php else:
            echo "
            <li class='nav-item'><a class='nav-link' href='login.php'>Entrar</a></li>";
          endif
          ?>
        </ul>
      </div>
    </div>
  </nav>