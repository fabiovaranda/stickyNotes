<br />
<div class="Nota">
		<h5 id="titulo">Titulo : <?php echo $row->Titulo; ?> </h5>
		<h5>Data : <?php echo $row->Data; ?></h5>
		<div class="Escrever">
			<textarea id="texto" required><?php echo $row->Texto; ?></textarea>
		</div>
		<a onclick='javascript:BuscaNota("Inicio")' class='medium button' style='border: 1px solid white;'>Voltar</a>
		<a  onclick="Editar(<?php echo $row->Id;?>,'<?php echo $row->Titulo;?>');" class='medium button' style='border: 1px solid white;left:40%;'>Editar</a>
		<a  onclick="Apagar(<?php echo $row->Id; ?>);" class='medium button' style='border: 1px solid white;left:40%;'>Apagar</a>
</div>