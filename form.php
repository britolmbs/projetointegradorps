<?php include "header.php"; ?>

    <div class="container">
		<section>
		<h1>Cadastre seu Plano de Saúde</h1><hr />
		<form method="POST" action="insert.php">
		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome" class="form-control form-control-lg" />
		</div>

		<div class="form-group">
			<label for="preco">Preço </label>
			<input type="text" name="preco" id="preco" class="form-control form-control-lg" />
		</div>

		<div class="form-group">
			<label for="abrangencia">Abrangencia: </label>
			<input type="text" name="abrangencia"  id="abrangencia" class="form-control form-control-lg" />
		</div>
		<div class="form-group">
			<label for="foto">Foto: </label>
		<input type="text" name="foto" id="foto" class="form-control form-control-lg" />

		</div>
			<button type="submit" class="btn btn-dark btn-lg">Enviar</button>
			
		</form>
		</section>
	</div>



    <?php include "footer.php"; ?>