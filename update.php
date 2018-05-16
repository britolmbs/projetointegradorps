<?php
include 'conexao.php';
include "header.php";

$id = $_POST['id'];
$preco = $_POST['preco'];

$sql = "UPDATE planos SET preco='$preco' WHERE id=$id";

if ($conn->query($sql) === TRUE) {                                                            
?>

<section>
	<div class="container">
		<h3>Plano Atualizado com Sucesso !</h3>
		<a href="atualiza.php" class="btn btn-dark">Cadastrar mais planos</a>
		<a href="index.php" class="btn btn-dark">Home</a>
		
	</div>



<?php 
}
else{
	echo "Erro:". $conn->error;
}
 $conn->close();
?>
</section>

<?php include "footer.php"; ?>