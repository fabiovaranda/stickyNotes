
		
		<div class="notas" id="style-8"> 
		<input id="mysearch2" type="search" placeholder="search">
		<?php
		 if(!isset($_SESSION['id'])){
			session_start();
		}
		
		include_once('DataAccess.php');
		$da = new DataAccess();
		$res = $da->SelecionarNotas( $_SESSION['id'] );
		if (mysqli_num_rows($res) > 0) {

			while ($row = mysqli_fetch_object($res)) {
			$titulo = $row->Titulo;
			$reticencias = false;
			if(strlen($titulo) > 12){
				$titulo =  substr($titulo, 0, 12);
				$reticencias = true;
			}
				echo '<img src="imagens/stickynote.png" width="173px" onclick="javascript:BuscaNota(' . $row->Id .')"><div onclick="javascript:BuscaNota(' . $row->Id .')" style="color:black;display:inline;position:absolute;margin-top:60px;margin-left:-140px;">'. $titulo ; 
				if($reticencias){
					echo ' </br>&nbsp;&nbsp;...';
				}
				echo '</div>&nbsp;';
			}
		}
		?>
			
		</div>
		
		<!-- 
		
			<div class="row collapse">     
				<div class="large-3 columns">
					<input type="text" placeholder="Pesquisar" />
				</div>
				<div class="large-1 end columns">
					<span class="postfix"><i class="fi-magnifying-glass"></i></span></input>
				</div>
			</div>
		
		
		<img src="imagens/stickynote.png" width="170px" onclick="javascript:BuscaNota(' . $row->Id .')">'. $row->Titulo . ' &nbsp;
		
		<center> '. $row->Titulo . ' </center>
		-->