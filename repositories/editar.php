<?php
// Conexão
include_once 'conexao.php';
// navbar
include_once '../components/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM cliente WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cliente </h3>
		<form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="data_nascimento"  value="<?php echo $dados['data_nascimento'];?>" id="data_nascimento" >
				<label for="data_nascimento">Data de nascimento</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['cpf'];?>" name="cpf" id="cpf">
				<label for="cpf">CPF</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['rg'];?>" name="rg" id="rg">
				<label for="rg">RG</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['telefone'];?>" name="telefone" id="telefone">
				<label for="telefone">Telefone</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="../clientes.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once '../components/footer.php';
?>
