<?php
include 'conexao.php';
include "header.php";

$id = $_POST['id'];

//$sql = "DELETE FROM planos WHERE id=$id";
$sql = "UPDATE planos SET status = 'apagado' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {                                                            
?>

<section>
	<div class="container">
		<h3>Plano excluido com Sucesso !</h3>
		<a href="excluir.php" class="btn btn-dark">excluir mais planos</a>
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