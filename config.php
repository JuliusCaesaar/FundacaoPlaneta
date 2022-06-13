<?php
    $dbhost='localhost';
	//$port=3306 porta de uso padrão;
    //$port=3312 porém estou utilizando em meu PC a porta 3312;
	$dbUser='root';
	$password=''; //Inserir uma senha caso o banco de dados tenha alguma.
	$dbname='fundacao_planeta';

	$conexao = new mysqli($dbhost, $dbUser, $password, $dbname,)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	/* Código para verificação se o banco de dados está conectado:
		Requisitos para funcionar:
		-Ter instalado o programa Xampp no PC;

		-Ter iniciado o Apache e o MySQL através do Xampp;

		-Ter criado uma pasta do projeto que deseja testar no diretório:
			C:\xampp\htdocs

		-Para verificar se o código abaixo está funcionando é necessário 
		abrir o navegador e digitar o link abaixo:
			http://localhost/fundacao_planeta/config.php

	Início do código 
    if($conexao->connect_errno){
        echo "Erro na conexão";
    }
    else {
        echo "Conexão efetuada com sucesso!";
    }*/

?>