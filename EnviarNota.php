<?php session_start();

if(isset($_POST['tituloNota'])){
	$titulo = $_POST['tituloNota'];
	$texto = $_POST['nota'];
	$idDono = $_SESSION['id'];
	$data = date('Y-m-d');

include_once('DataAccess.php');
		$da = new DataAccess();
		$res = $da->inserirNota($idDono, $titulo, $texto, $data);
}
?>