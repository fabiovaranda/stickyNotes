<?php session_start();
 if(isset($_SESSION['id'])){
		echo "<script>window.location='inicio.php';</script>";
}?>
<html>
	<head>
		<title>Sticky Notes | Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="foundation/css/foundation.css" />
		<script src="foundation/js/vendor/modernizr.js"></script>
		<link rel="stylesheet" href="css/estilo.css" />
	</head>
	<body>
	
		<div class='row'>
		<div class='large-12'>
		<center> <img src="imagens/logo.png" width="50%"> </center>
		</div>
		<br />
			<div class='large-12 large-centered panel columns'>
				<div class='row'>
					<div class='large-5 columns'>
					<?php include_once("login.php"); ?>
					</div>
					<div class='large-1 columns'>
						<div class="v-separator"></div>
					</div>
					<div class='large-6 columns'>
					Bem vindo a StickyNotes.
					<br /> <br />
					Neste site, os utilizadores poderão gerir as suas anotações.<br />
					As anotações que criar neste site serão guardadas para uma maneira fácil de lembrar tarefas para fazer e rever textos importantes que tiver guardado, 
					tudo com uma interface simples e facil de usar.
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		<?php
			if (isset($_POST['emailUtilizador'])){
				//formulário foi submetido
				$emailUtilizador = $_POST['emailUtilizador'];
				$pwdUtilizador = $_POST['pwdUtilizador'];
				echo $emailUtilizador." ".$pwdUtilizador;
			}
		?>
		<script src="foundation/js/vendor/jquery.js"></script>
		<script src="foundation/js/foundation.min.js"></script>
		<script>
		  $(document).foundation();
		  
		</script>
		
	</body>
</html>