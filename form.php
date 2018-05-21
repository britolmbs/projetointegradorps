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
			<label class="col-md-4 control-label" for="abrangencia">Abrangência</label>
			 <div class="col-md-5">
    <select id="abrangencia" name="abrangencia" class="form-control-lg">
			<option value="municipal">Municipal</option>
			<option value="estadual">Estadual</option>
			<option value="nacional">Nacional</option>
			<option value="internacional">Internacional</option>
			</select>
		</div>
		</div>
		<div class="form-group">
			<label for="foto">Foto: </label>
		<input type="file" name="foto" id="foto" class="form-control form-control-lg" />

		</div>
			<button type="submit" class="btn btn-dark btn-lg">Enviar</button>
			
		</form>
		</section>
	</div>



    <?php include "footer.php"; ?>