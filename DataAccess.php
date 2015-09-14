<?php

class DataAccess{
    private $connection;
	
    function connect(){
        $bd= "stickynotes";
        $user = "root";
        $pwd = "";
        $server = "localhost";
		$this->connection = mysqli_connect($server,$user,$pwd,$bd);

		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{
            mysqli_query($this->connection, "set names 'utf8'");
            mysqli_query($this->connection, "set character_set_connection=utf8");
            mysqli_query($this->connection, "set character_set_client=utf8");
            mysqli_query($this->connection, "set character_set_results=utf8");
        }
    }
    
    function execute($query){
        $res = mysqli_query($this->connection, $query);
        if(!$res){
            die("Comando inválido".mysqli_error());
        }else
            return $res;
    }
    
    function disconnect(){
        mysqli_close($this->connection);
    }
     
	function inserirUtilizador($nome, $email, $pwd){
		$query = "insert into utilizadores(Nome, Email, Senha) 
					values('$nome', '$email','$pwd')";
		$this->connect();
        $this->execute($query);
        $this->disconnect();
	}
	
	function login($email, $password){
		$query = "select * from utilizadores where Email ='$email' and Senha = '$password'";
		$this->connect();
		$res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	function inserirNota($idDono, $titulo, $texto, $data){
		$query = "insert into notas(Titulo, Texto, Data, IdUtilizador) 
					values('$titulo', '$texto','$data','$idDono')";
		$this->connect();
        $this->execute($query);
        $this->disconnect();
	}
		function SelecionarNotas($idDono){
		$query = "select * from notas where idUtilizador ='$idDono'";
		$this->connect();
		$res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	function SelecionarNota($id){
		$query = "select * from notas where id ='$id'";
		$this->connect();
		$res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
		function ApagarNota($id){
		$query = "Delete from notas where id ='$id'";
		$this->connect();
		$res = $this->execute($query);
		$this->disconnect();
	}
	function EditarNota($id, $titulo, $texto){
		$query = "update notas set Titulo='$titulo', Texto='$texto' where Id = $id";
		$this->connect();
		$this->execute($query);
		$this->disconnect();
	}
	function EditarUtilizador($id, $nome, $email){
		$query = "UPDATE utilizadores SET Nome='$nome', Email='$email' where Id='$id'";
		$this->connect();
		$this->execute($query);
		$this->disconnect();
	}
		function EditarPassword($id, $Senha){
		$query = "UPDATE utilizadores SET Senha='$Senha' where Id='$id'";
		$this->connect();
		$this->execute($query);
		$this->disconnect();
	}
}
?>