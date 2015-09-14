    <script>
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'EnviarNota.php',
            data: $('form').serialize()
          }).done(function () {
              alert('Nota Guardada');
            });

        });

      });
    </script>
<br />
<div class="Nota">
	<form>
		<input type="text" name="tituloNota" placeholder="Titulo" required>
		<div class="Escrever">
			<textarea name="nota" required></textarea>
		</div>
		<input type='submit' class='medium button' style='border: 1px solid white;' value='Submeter' />
	</form>
</div>