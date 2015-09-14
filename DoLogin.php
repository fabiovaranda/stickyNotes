<?php
	if (isset($_POST['emailUtilizador'])){
	
		//tentar efetuar login
		$email = $_POST['emailUtilizador'];
		$pwd = md5($_POST['pwdUtilizador']); //md5 serve para encriptar a password
		
		include_once('DataAccess.php');
		$da = new DataAccess();
		$res = $da->login($email, $pwd);
		
		//Se a variável $res tiver resultados, significa que o login foi efetuado com sucesso
		if (mysqli_num_rows($res) > 0) {
		
			$row = mysqli_fetch_object($res);
			session_start();
			$_SESSION['id'] = $row->Id;			
			$_SESSION['nome'] = $row->Nome;
			$_SESSION['email'] = $row->Email;
			$_SESSION['password'] = $row->Senha;
			echo "<script>alert('Login efetuado com sucesso'); window.location='inicio.php'</script>";
			
		}else{	
			echo "<script>alert('Login incorreto'); window.location='index.php'</script>";
		}	
	}
?>








