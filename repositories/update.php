<?php
// Sessão
session_start();
// Conexão
include_once 'conexao.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$data_nascimento = mysqli_escape_string($connect, $_POST['data_nascimento']);
	$cpf = mysqli_escape_string($connect, $_POST['cpf']);
	$rg = mysqli_escape_string($connect, $_POST['rg']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE cliente SET nome = '$nome', data_nascimento = '$data_nascimento', cpf = '$cpf', rg = '$rg', telefone = '$telefone', endereco = '$endereco' WHERE id = $id";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../clientes.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../clientes.php');
	endif;
endif;