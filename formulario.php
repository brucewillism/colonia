<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FORMULÁRIO PARA SOLICITAÇÃO DE ACOMPANHAMENTO DISCENTE PELA EQUIPE MULTIPROFISSIONAL</title>
	<link rel="stylesheet" type="text/css" href="css/formulario.css">
</head>
<body>
	<?php include 'menu.php'; ?>
	<br>
	<br>
	<br>
	<br>
	<div id="area">
			<form action="bd/cadastrar_requerimento.php" method="POST" id="formulario" autocomplete="off">
					<fieldset>
					<legend>FORMULÁRIO PARA SOLICITAÇÃO DE ACOMPANHAMENTO DISCENTE PELA EQUIPE MULTIPROFISSIONAL</legend>

					<label>NOME DO SOLICITANTE</label>
					<textarea rows="1" cols="70" maxlength="500" class="campo" name="nome"></textarea>
					<label>ASSINATURA</label>
					<textarea rows="1" cols="70" maxlength="500" class="campo" name="assinatura"></textarea>

					<label>SELECIONE O QUE VOCE É:</label>
					<select name="select_tipo">
							<option value="estudante">ESTUDANTE</option>
							<option value="docente">DOCENTE</option>
							<option value="tecnico_administrativo">TECNICO ADMINISTRATIVO</option>
							<option value="terceirizado">TERCEIRIZADO</option>
							<option value="familiar">FAMILIAR</option>
					</select>


					<br>
					<label>NOME DO(A) ESTUDANTE A SER ATENDIDO(A):</label>
					<br>
					<textarea rows="1" cols="70" maxlength="500" class="campo" name="nome_estudante"></textarea>

					<br>
					<label>CURSO/PERIODO/TURNO:</label>
					<select name="select_tipo">
							<option value="1 Periodo IPI">1 Periodo IPI</option>
							<option value="2 Periodo IPI">2 Periodo IPI</option>
							<option value="3 Periodo IPI">3 Periodo IPI</option>
							<option value="1 Periodo Logistica">1 Periodo Logistica</option>
							<option value="2 Periodo Logistica">2 Periodo Logistica</option>
							<option value="3 Periodo Logistica">3 Periodo Logistica</option>
							<option value="4 Periodo Logistica">4 Periodo Logistica</option>
					</select>


					<br>
					<label>ASSINALE O(S) MOTIVO(S) DO ENCAMINHAMENTO:</label>
					<select name="select_motivo">
							<option value="estudante">Falta Constante</option>
							<option value="docente">Dificuldade de Apredizagem</option>
							<option value="tecnico_administrativo">Questões De Relacionamento Interpessoal</option>
							<option value="terceirizado">Questões Relacionadas a Saude</option>
							<option value="familiar">Questões Relacionadas a Familia</option>
							<option value="familiar">Questões Financeira</option>
							<option value="familiar">Não Participação em Atividades Academicas</option>
							<option value="familiar">Falta De Diciplina Para Estudo</option>
							<option value="familiar">Outros</option>
					</select>


					<br>
					<label>RELATO DO(S) MOTIVO(S) DO ENCAMINHAMENTO</label>

					<textarea rows="10" cols="70" maxlength="500" name="relato" class="msg"></textarea>

				<p>obs: Qualquer membro da Equipe Multiprofissional poderá receber o encaminhamento que será devidamente analisado por toda a equipe em reunião posterior; ocasião na qual sera indicado o profissional ou profissionais responsaveis pelo acompanhamento do acaso. A Equipe Multiprofissional dará a devolutiva, atraves de qualquer de seus membros, ao solicitante que informou a situação, bem como,informará quando pertinente, a familia do estudante menor de 18 anos.</p>



				<label>MEMBRO DA EQUIPE MULTIPROFISSIONAL QUE RECEBEU A SOLICITAÇÃO</label>
					<textarea rows="1" cols="70" maxlength="500" class="campo" name="nome_receptor"></textarea>
				<label>ASSINATURA</label>
					<textarea rows="1" cols="70" maxlength="500" class="campo" name="assinatura_receptor"> </textarea>
				<label>DATA</label>
					<input type="date" class="campo" name="data">

				<label>Encaminhamento Equipe</label>
					<textarea rows="10" cols="70" maxlength="500" name="encaminhamento_equipe" class="msg"></textarea>

				<label>Assinatura Equipe</label>
					<textarea rows="10" cols="70" maxlength="500" name="assinatura_equipe" class="msg"></textarea>
					<input type="submit" value="Enviar">
			</fieldset>
			</form>
		</div>
</body>
</html>