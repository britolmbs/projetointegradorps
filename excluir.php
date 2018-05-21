<?php include "header.php"; ?>
  <br />




		
    <div class="container">
		<section>
		<h1>Excluir o Plano</h1><hr />
		<form method="POST" action="delete.php">
		<div class="form-group">
			 <label class="col-md-4 control-label" for="id">Plano</label>
  <div class="col-md-6">
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
		<br />
         <button class="btn btn-dark btn-lg">Enviar</button>
		</div>

		</form>
	</section>
	</div>
 <?php 
 $conn->close(); ?>


    <?php include "footer.php"; ?>