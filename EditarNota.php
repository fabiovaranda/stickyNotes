<?php
 
	if(isset($_POST['id'])) {
		$id = $_POST['id'];
		$titulo = $_POST['titulo'];
		$texto = $_POST['texto'];
		
		include_once('DataAccess.php');
		$da = new DataAccess();
		$da->EditarNota($id, $titulo, $texto);			
	}
?>