<?php include "header.php"; ?>
<div class="container">
<section>
<div class="container">
<div class="row">
		 
 <?php 
$sql = "SELECT * FROM planos WHERE status = 'ativo'";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		?>
<p>&nbsp;</p>


<div class="card col-md-2 col-lg-2">
  <img class="produto card-img-top" src="img/<?php echo $row['foto']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['nome']; ?></h5>
    <p class="card-text h6">R$: <?php echo $row['preco']; ?></p>
    <a href="#" class="btn btn-secondary">Ver mais</a>
    </div>
    </div>


<?php 

		}
}
else{
	echo "0 resultados";
}
$conn->close();
?>
	</div>
</section>
</div>
</div>

<?php include "footer.php"; ?>