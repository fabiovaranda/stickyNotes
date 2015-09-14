<?php session_start();
 if(isset($_SESSION['id'])){
		echo "<script>window.location='inicio.php';</script>";
}?><html>
	<head>
		<title>Registar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="foundation/css/foundation.css" />
		<script src="foundation/js/vendor/modernizr.js"></script>
		<link rel="stylesheet" href="css/estilo.css" />
		<script>
			function ValidarNome(){
				var te = /[A-Za-z0-9]/;
				if (te.test(document.getElementById("nome").value)==false){
					alert("O nome não pode conter caracteres especiais");
					document.getElementById("nome").focus();
					return false;
				}else
				return true;
			}
			function ValidarEmail(){
				var reg = /^[A-Za-z0-9._-]+@[a-z]+\.[a-z]{2,3}(\.[a-z]{2,3})?$/;
				if(reg.test(document.getElementById("email").value) == false){
					alert ("Insira um email correto");
					document.getElementById("email").focus();
					return false;
				}else
				return true;
			}
			function ValidarPwd(){
				var re = /^(?=.*[0-9])(?=.*[A-Z]){6,20}/ ;
				if(re.test(document.getElementById("pass").value)== false){
					alert("A Password tem de conter letras,números e caracteres especiais");
					document.getElementById("pass").focus();
					return false;
				}else
				return true;
			}
			function validarForm(){
				if (ValidarEmail() == true && ValidarPwd() == true && ValidarNome() ==true)
					return true;
				else
					return false;
			}
		</script>
	</head>
	<body>
	<div class='row'>
		<div class='large-12'>
		<center> <img src="imagens/logo.png" width="50%"> </center>
		</div>
		<br />
		<div class='large-6 large-centered panel columns'>
			<form method='post' action='DoRegisto.php'>
				<div class='row'>
				<div class='large-12 columns'>
								<input type='text' placeholder='Nome' name='Nome' id='nome' onchange='ValidarNome()' required/>
				</div>
				<div class='large-12 columns'>
								<input type='text' placeholder='E-mail' name='Email' id='email' onchange='ValidarEmail()' required/>
				</div>
				<div class='large-12 columns'>
								<input type='password' placeholder='Password' name='pwd' id='pass' onchange='ValidarPwd()' required/>
				</div>
				<div class='large-12 columns'>
				<div class='large-10 large-centered columns'>
								<input type='submit' value='Registar' onclick='return validarForm()' class='medium button'/>
								<a href="index.php" class='medium button'>Voltar </a>
				</div>
				</div>
				</div>
			</form>
		</div>
			<!-- <div class='large-12 large-centered panel columns'>
				<div class='row'>
		<div class='row'>
		<div class='large-12 columns'><center> <img src="imagens/logo.png" width="50%"> </center></div>
			<div class='large-12 columns'>
				<div class="row" style='position:relative; padding-top:3%'>
				  <div class="large-4 columns">&nbsp;</div>
				  <div class="large-4 columns">
						<form method='post' action='registar.php'>
						<div class='row panel'>
							<div class='large-12 columns'>
								<input type='text' placeholder='Nome' name='Nome' id='nome' onchange='ValidarNome()' required/>
							</div>
							<div class='large-12 columns'>
								<input type='text' placeholder='E-mail' name='Email' id='email' onchange='ValidarEmail()' required/>
							</div>
							<div class='large-12 columns'>
								<input type='password' placeholder='Password' name='pwd' id='pass' onchange='ValidarPwd()' required/>
							</div>
							<div class='large-12 columns'>
							</div>
							<div class='large-12 large-centered columns'>
								<input type='submit' value='Registar' onclick='return validarForm()' class='medium button'/>
								<a href="index.php" class='medium button'>Voltar </a>
							</div>
						</div>
						</form>
				  </div>
				  <div class="large-4 columns">&nbsp;</div>
				</div>
			</div>
		</div> -->





		
		<script src="foundation/js/vendor/jquery.js"></script>
		<script src="foundation/js/foundation.min.js"></script>
		<script>
		  $(document).foundation();
		</script>
	</body>
</html>