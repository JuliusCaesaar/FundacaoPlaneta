<?php
	//session_start();
	include_once("config.php");

	if(isset($_POST['submit'])) {
		$nome = $_POST['name'];
		$email = $_POST['email'];
		$telefone = $_POST['phone'];
		$comentario = $_POST['comment'];

		$result = mysqli_query($conexao, "INSERT INTO usuarios(Nome, Email, Telefone, Comentario) VALUES ('$nome', '$email', '$telefone', '$comentario')");

		/*$result = mysqli_query($conexao, $result);
		if(mysqli_insert_id($conexao)) {
			$_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado!</p>"
			header("location: index.html");

		}
		else {
			$_SESSION['msg'] = "<p style='color: red;'>Usuário não foi cadastrado!</p>"
			header("location: index.html");
		}*/
	}

	/*
	$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$telefone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
	$comentario = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);

	"INSERT INTO usuarios (Nome, Email, Telefone, Comentario) VALUES ('$nome', '$email', '$telefone', '$comentario')";*/
?>

