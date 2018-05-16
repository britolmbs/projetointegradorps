<<?php include "header.php"; ?>
<section>
	<div class="container">
<p>&nbsp;</p>
<div class="card card-header bg-dark text-white text-center"><h3>Nossos Planos</div></h1>

<?php
include "conexao.php";

$busca= $_POST['nome'];

$sql = "SELECT * FROM planos WHERE UPPER (nome)= UPPER('$busca')";
$result = $conn->query($sql);

if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		?>

<p>&nbsp;</p>


<div class="card col-md-3 col-lg-3">
  <img class="produto card-img-top" src="img/<?php echo $row['foto']; ?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['nome']; ?></h5>
    <p class="card text h6">R$: <?php echo $row['preco']; ?></p>
    <p class="card text h6">Abrangência: <?php echo $row['abrangencia']; ?></p>
    <a href="produto.php?id=<?php echo $row['id'];?>" class="btn btn-secondary">Ver mais</a>
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
</section>

<?php "footer.php"; ?>
 