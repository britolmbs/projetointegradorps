<?php
include "conexao.php";
include "header.php";

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$abrangencia = $_POST['abrangencia'];
$foto = $_POST['foto'];

$sql = "INSERT INTO planos (nome, preco, abrangencia, foto) VALUES ('$nome', '$preco', '$abrangencia', '$foto')";
if($conn->query($sql) === TRUE){
	?>

<section>
	<div class="container">
	<h4>Plano Cadastrado com Sucesso !</h4>

<a href="form.php" class="btn btn-dark">Cadastrar mais planos</a>
<a href="index.php" class="btn btn-dark">Home</a>
</div>



	<?php 
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}
?>
</section>

<?php include "footer.php"; ?>