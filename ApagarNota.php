<?php
 
	if(isset($_GET['Apagar'])) {
		$id = $_GET['Apagar'];
		
		include_once('DataAccess.php');
		$da = new DataAccess();
		$da->ApagarNota($id);			
		echo "<script>alert('Nota apagada com sucesso'); window.location='inicio.php'</script>";
	}
?>