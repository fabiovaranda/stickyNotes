 <?php
	if(isset($_GET['id'])){
		include_once('DataAccess.php');
		$da = new DataAccess();
		//Select dos dados da nota escolhida
		$res = $da->SelecionarNota($_GET['id']);
		$row = mysqli_fetch_object($res);
		
		//Layout para Mostar a Nota escolhida
		include_once("MostrarNota.php");
	}else{
		include_once("CriarNota.php");
	}
 ?>