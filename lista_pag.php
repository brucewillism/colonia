<?php
require_once'bd/conexao.php';
include 'cabeçalho.php';
?>


<body>
	<br>
	<br>
	<br>
	<br>
	<br>
<!-- <div id="box2">
	<form   action="" method="POST"  onsubmit="return mask();">

		<fieldset>
			<center>
				<font face="arial" size="5" color="black">
					<B>Lista Fornecedor</B>
				</font>
			</center>
		</fieldset>

		<fieldset>
			<label>Código:</label>
				  <input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:70px">
			<label>Razão Social/Nome:</label>
				<input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:410px">
				<label>CNPJ/CPF:</label>
				<input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:200px"><br><br>
					<label>Endereço:</label>
					<input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:450px">
						<label>Telefone:</label>
						<input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:150px">
						<label>Celular:</label>
						<input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:150px"><br><br>
						<font face="arial" size="3" color="#006400"><B>Editar</B></font>
						<font face="arial" size="3" color="#FF0000"><B>Excluir</B></font>
		</fieldset>
					<br><br>
    	

</form>
</div> -->
<table id="tabela" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Pescador</th>
			<th>Vencimento</th>
			<th>Prorrogado</th>
			<th>Pagamento</th>
			<th>Forma de Pagamento</th>
			<th>Baixado</th>
			<th>Valor</th>
			<th>Delete</th>
			<th>Edit</th>
			<th>Observação</th>

		</tr>
	</thead>

	<div>
		<tbody>
			<?php
			require_once 'bd/conexao.php';			
			$stmt = $conn->query("SELECT * 
				FROM pescadores
				INNER JOIN pagamentos
				ON pagamentos.pescador_id = pescadores.pescador_id");			
			$cadastro = $stmt->fetchAll();

			foreach ($cadastro as $dados) {
				$id = $dados['id'];
				$pescador_id = $dados['pescador_id'];
				$nome=$dados['nome'];
				$vencimento=$dados['vencimento'];
				$prorrogado=$dados['prorrogado'];
				$pagamento=$dados['pagamento'];
				$forma_pagamento=$dados['forma_pagamento'];
				$baixar=$dados['baixar'];
				$valor=$dados['valor'];
				$obs=$dados['obs'];
				echo "<tr>
				<td>$nome</td>
				<td>$vencimento</td>
				<td>$prorrogado</td>
				<td>$pagamento</td>
				<td>$forma_pagamento</td>
				<td>$baixar</td>
				<td>$valor</td>
				<td><a  href='deletar_pag.php?id=".$id."'>Excluir</a></td>
				<td><a  href='edit_pag.php?id=".$id."'>Editar</a></td>
				<td>$obs</td>
				</tr>";
			}
			?>
		</tbody>
	</table>
	<center>
		<input type="button" value="Imprimir" onClick="window.print()" value="Imprimir" id="btncad">
	</center>
</div>
</table>
</body>