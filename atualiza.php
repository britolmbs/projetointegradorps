<?php include "header.php"; ?>
  <br />

    <div class="container">
		<section>
		<h1>Atualize o Plano</h1><hr />
		<form method="POST" action="update.php">
		<div class="form-group">
			 <select id="id" name="id" class="form-control">
    	<?php 
$sql = "SELECT * FROM planos WHERE status = 'ativo'";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		?>
      <option  value="<?php echo $row['id'];?>" id="id" name="id"><?php echo $row['nome'];?></option>

      	<?php 

		}
}
else{
	echo "0 resultados";
}
?>
 </select>
		</div>

		<div class="form-group">
			<label for="preco">Preço </label>
			<input type="text" name="preco" id="preco" class="form-control form-control-lg" />
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control form-control-lg" />
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
        <br />
        <button type="submit" class="btn btn-dark btn-lg">Enviar</button>
		</div>

		</form>
		</section>
	</div>
	<?php 
 $conn->close(); ?>


   <?php include "footer.php"; ?>