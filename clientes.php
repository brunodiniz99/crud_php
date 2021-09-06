<?php
// Conexão
include_once 'repositories/conexao.php';
// navbar
include_once 'components/header.php';
//mensagens
include_once 'components/message.php';
?>

<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Clientes </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome </th>
					<th>Data nascimento </th>
					<th>Cpf </th>
					<th>Rg </th>
					<th>Telefone </th>
					<th>Endereço </th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM cliente";
				$resultado = mysqli_query($connect, $sql);

				if (mysqli_num_rows($resultado) > 0) :

					while ($dados = mysqli_fetch_array($resultado)) :
				?>
						<tr>
							<td><?php echo $dados['nome']; ?></td>
							<td><?php echo $dados['data_nascimento']; ?></td>
							<td><?php echo $dados['cpf']; ?></td>
							<td><?php echo $dados['rg']; ?></td>
							<td><?php echo $dados['telefone']; ?></td>
							<td><?php echo $dados['endereco']; ?></td>
							<td><a href="repositories/editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>


							<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

							<!-- Modal Structure -->
							<div id="modal<?php echo $dados['id']; ?>" class="modal modal-fixed-footer" >
								<div class="modal-content">
									<h4>Opa!</h4>
									<p>Tem certeza que deseja excluir esse cliente?</p>
								</div>
								<div class="modal-footer" >
									<form action="repositories/delete.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
										<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
									</form>
								</div>
							</div>


						</tr>
					<?php
					endwhile;
				else : ?>

					<tr>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>

				<?php
				endif;
				?>

			</tbody>
		</table>
		<br>
		<a href="cadastro.php" class="btn">Adicionar cliente</a>
	</div>
</div>

<?php
// Footer
include_once 'components/footer.php';
?>