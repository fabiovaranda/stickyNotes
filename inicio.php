<?php session_start();
 if(!isset($_SESSION['id'])){
		echo "<script>window.location='index.php';</script>";
}?>
<html>
	<head>
		<title>Sticky Notes | Inicio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
		<link rel="stylesheet" href="css/estilo.css" />
		<link type="text/css" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" />
	
		<script src="http://code.jquery.com/jquery-1.11.3.js"></script>
		<script src="js/md5.min.js"></script>
	</head>
	
	<body>
	<?php include_once("top.php");?>
<div id="acoes">	
		<?php include_once("BuscarInicio.php");?>
</div>
		
	</body>
        <script type="text/javascript">
	function Apagar(Id){
		var res = confirm("Deseja mesmo apagar esta nota ?");
		if(res){
			window.location='ApagarNota.php?Apagar='+Id;
		}
	}
	function Editar(IdN, TituloN){
		var res = confirm("Deseja mesmo editar esta nota ?");
		if(res){
			var TextoN = document.getElementById("texto").value;
			
			var posting = $.post( "EditarNota.php",{ id: IdN, titulo: TituloN, texto: TextoN } ,function(){
			alert("Nota editada com sucesso");
			BuscarInicio();
			});
		}
	}
	function BuscarEliminar(){
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("acoes").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "BuscarEliminar.php", true);
        xmlhttp.send();
	}
	function BuscarInicio(){
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("acoes").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "BuscarInicio.php", true);
        xmlhttp.send();
	}
	function BuscarPerfil(){
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("acoes").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "BuscarPerfil.php", true);
        xmlhttp.send();
	}
    function BuscaNota(str){
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Nota").innerHTML = xmlhttp.responseText;
            }
        }
		if(typeof str === 'number') {
			xmlhttp.open("GET", "nota.php?id=" + str, true);
		}else{
		        xmlhttp.open("GET", "nota.php", true);
		}
        xmlhttp.send();
	 }
	 function Mudar(str){
		document.getElementById("dados").style.display = "none";
		document.getElementById(str).style.display = "block";
		}
	function Voltar(str){
		document.getElementById("dados").style.display = "block";
		document.getElementById(str).style.display = "none";
		}
	function Nome(){
		Mudar("NomeU");
	}
    function Listagem(){
		  setInterval(function () { 
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("listagem").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ListagemNotas.php", true);
        xmlhttp.send();
	}, 1000);
	}
    
	function editarU(){
		
		var posting = $.post( "EditarPerfil.php", $( "#EditarNomeEmail" ).serialize(),function(){
		alert("Perfil editado com sucesso!");
		BuscarPerfil();
		} );
		event.preventDefault();
	}

	function verficarPassword(){
		var passDB = "<?php echo $_SESSION['password'] ?>";
		var pass = md5(document.getElementById("pass").value);
		var NovaPass =	document.getElementById("Npass").value;
		var CNpass = document.getElementById("CNpass").value;
		if(passDB == pass){
			if(NovaPass == CNpass){
				var posting = $.post( "EditarPerfil.php",{ Npass: md5(NovaPass), id: <?php echo $_SESSION['id']; ?> } ,function(){
				alert("Password atualizada com sucesso!");
				BuscarPerfil();
				} );
			}else{
				alert("A nova password inserida não foi confirmada!");
			}
		}else{
			alert("A password inserida não corresponde à atual!");
		}
	
	}
	
	function editarP(){
		verficarPassword();
		event.preventDefault();
	}
	
	</script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</html>