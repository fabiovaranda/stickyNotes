		<?php
		 if(!isset($_SESSION['id'])){
			session_start();
		}?>
    <br />
	<div class="row" >
	<div class="large-6 large-centered columns panel"><br />
	
	<div id="dados">
Nome: <?php echo $_SESSION['nome'];?><br/>
Email: <?php echo $_SESSION['email'];?><br/>
<button onclick="Mudar('EditarU');">Editar perfil</button>	<button class="right" onclick="Mudar('EditarP');">Password nova</button>				
	</div>
	
	<div id="EditarU" style="display:none;">
		<form id="EditarNomeEmail" onsubmit="editarU()">
			<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>"/>
			<input type="text" name="nome" placeholder="Nome" value="<?php echo $_SESSION['nome'];?>" required/>
			<input type="text" name="email" placeholder="Email" value="<?php echo $_SESSION['email'];?>" required/>
			<input class='right medium button' type="submit" value="Mudar" />
		</form>
		<button class="left medium button"  onclick="Voltar('EditarU');"> Voltar </button>
		</br>
		</br>
	</div>
		<div id="EditarP" style="display:none;">
		<form id="EditarPassword" onsubmit="editarP()">
			<input type="password" id="pass" name="pass" placeholder="Password" required/>
			<input type="password" id="Npass" name="Npass" placeholder="Nova Password" required/>
			<input type="password" id="CNpass" name="CNpass" placeholder="Confirmar Nova Password" required/>
			<input class='right medium button' type="submit" value="Mudar" />
		</form>
		<button class="left medium button"  onclick="Voltar('EditarP');"> Voltar </button>
		</br>
		</br>
	</div>
	</div>