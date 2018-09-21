<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Cadastro de Foto</title>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://malsup.github.io/min/jquery.form.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <script type="text/javascript">

        // Quando carregado a página
        $(function ($) {

            // Quando enviado o formulário
            $('#formulario').on('submit', function () {

                // Armazenando objetos em variáveis para utilizá-los posteriormente
                var formulario = $(this);
                var botao = $('#salvar');
                var mensagem = $('#mensagem');

                // Exibindo indicador de carregamento (Bootstrap)
                // Docs: http://getbootstrap.com/javascript/#buttons
                botao.button('loading');

                // Enviando formulário
                $(this).ajaxSubmit({

                    // Definindo tipo de retorno do servidor
                    dataType: 'json',

                    // Se a requisição foi um sucesso
                    success: function (retorno) {

                        // Se cadastrado com sucesso
                        if (retorno.sucesso) {
                            // Definindo estilo da mensagem (sucesso)
                            mensagem.attr('class', 'alert alert-success');

                            // Limpando formulário
                            formulario.resetForm();
                        }
                        else {
                            // Definindo estilo da mensagem (erro)
                            mensagem.attr('class', 'alert alert-danger');
                        }

                        // Exibindo mensagem
                        mensagem.html(retorno.mensagem);

                        // Escondendo indicador de carregamento
                        botao.button('reset');

                    },

                    // Se houver algum erro na requisição
                    error: function () {

                        // Definindo estilo da mensagem (erro)
                        mensagem.attr('class', 'alert alert-danger');

                        // Exibindo mensagem
                        mensagem.html('Oops, ocorreu um erro');

                        // Escondendo indicador de carregamento
                        botao.button('reset');
                    }

                });

                // Retorna FALSE para que o formulário não seja enviado de forma convencional
                return false;

            });

        });

    </script>
</head>

<body>

<div class="container">

    <form id="formulario" action="ajax/salvar.php" method="post">

        <div id="mensagem" style="width:350px";></div>

        <div class="form-group">
            <label>Foto</label>
            <input class="form-control" type="file" name="foto"/ style="width:350px";>
        </div>

        <input id="salvar" class="btn btn-primary" type="submit" value="Atualizar Foto" data-loading-text="Salvando..."/>

    </form>

</div>

</body>
</html>