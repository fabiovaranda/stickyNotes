<?php
if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$id = $_POST['id'];
	
include_once('DataAccess.php');
		$da = new DataAccess();
		$da->EditarUtilizador($id, $nome, $email);
		session_start();		
		$_SESSION['nome'] = $nome;
		$_SESSION['email'] = $email;
}

if(isset($_POST['Npass'])){
	$passnova = $_POST['Npass'];
	$id = $_POST['id'];
	
include_once('DataAccess.php');
		$da = new DataAccess();
		//função para enviar a nova senha para a base de dados
		$da->EditarPassword($id,$passnova);
		session_start();		
		$_SESSION['password'] = $password;
}
?>