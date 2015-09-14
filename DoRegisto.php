<?php
	if (isset($_POST['Email'])){
		$email = $_POST['Email'];
		$nome = $_POST['Nome'];
		$pwd = md5($_POST['pwd']); //md5 serve para encriptar a password
		include_once('DataAccess.php');
		$da = new DataAccess();
		$da->inserirUtilizador($nome, $email, $pwd);
		echo "<script>alert('Utilizador registado com sucesso'); window.location='index.php'</script></script>";
	}
?>