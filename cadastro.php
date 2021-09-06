<?php
// Conexão
include_once 'repositories/conexao.php';
// navbar
include_once 'components/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Cliente </h3>
		<form action="repositories/create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="data_nascimento" id="data_nascimento" maxlength="10" onkeypress="formatar_mascara(this,'##/##/####')">
				<label for="data_nascimento">Data nascimento</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="cpf" id="cpf" maxlength="14" onkeypress="formatar_mascara(this,'###.###.###-##')">
				<label for="cpf">CPF</label>
			</div>
 
			<div class="input-field col s12" >
				<input type="text" name="rg" id="rg" maxlength="12" onkeypress="formatar_mascara(this,'##.###.###-##')">
				<label for="rg">RG</label>
			</div>

            <div class="input-field col s12">
				<input type="text" name="telefone" id="telefone" maxlength="12" onkeypress="formatar_mascara(this,'## ####-####')">
				<label for="telefone">Telefone</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="clientes.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'components/footer.php';
?>