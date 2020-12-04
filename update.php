<?php
session_start();
require_once 'db_connectcadastro.php';

if (isset($_POST['btn-editar'])) {

	if (!$Preço = filter_input(INPUT_POST, 'Preço', FILTER_VALIDATE_INT)) {
		$_SESSION['mensagem'] = "Formato de preço inválido";
		header('Location: indexcadastro.php');
	}else if (!$Quantidade = filter_input(INPUT_POST, 'Quantidade', FILTER_VALIDATE_INT)) {
		$_SESSION['mensagem'] = "Formato de quantidade inválido";
		header('Location: indexcadastro.php');
	} else {
		$Produto = mysqli_escape_string($connect, $_POST['Produto']);
		$Preço = mysqli_escape_string($connect, $_POST['Preço']);
		$Tamanho = mysqli_escape_string($connect, $_POST['Tamanho']);
		$Cor = mysqli_escape_string($connect, $_POST['Cor']);
		$Quantidade = mysqli_escape_string($connect, $_POST['Quantidade']);

		$id = mysqli_escape_string($connect, $_POST['id']);

		$sql = "UPDATE 	cadastroprodutos SET Produto = '$Produto', Preço = '$Preço', Tamanho = '$Tamanho', Cor = '$Cor', Quantidade = '$Quantidade' WHERE id = '$id'";

		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Atualizado com sucesso!";
			header('Location: indexcadastro.php');
		} else {
			$_SESSION['mensagem'] = "Erro ao atualizar";
			header('Location: indexcadastro.php');
		}
	}
}