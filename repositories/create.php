<?php
// Sessão
session_start();
// Conexão
require_once 'conexao.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$data_nascimento = clear($_POST['data_nascimento']);
	$cpf = clear($_POST['cpf']);
	$rg = clear($_POST['rg']);
	$telefone = clear($_POST['telefone']);

	$sql = "INSERT INTO cliente (nome, data_nascimento, cpf, rg, telefone ) VALUES ('$nome', '$data_nascimento', '$cpf','$rg', '$telefone')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../clientes.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../clientes.php');
	endif;
endif;