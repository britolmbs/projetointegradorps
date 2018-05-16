<?php include "header.php"; ?>
  <br />

    <div class="container">
		<section>
		<h1>Atualize o Plano</h1><hr />
		<form method="POST" action="update.php">
		<div class="form-group">
			<label for="id">Id: </label>
			<input type="number" name="id" class="form-control form-control-lg" />
		</div>

		<div class="form-group">
			<label for="email">Preço </label>
			<input type="number" name="preco" class="form-control form-control-lg" />
        <br />
        <button type="submit" class="btn btn-dark btn-lg">Enviar</button>
		</div>

		</form>
		</section>
	</div>

   <?php include "footer.php"; ?>