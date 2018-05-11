<?php
include 'conexao.php';

$id = $_POST['id'];
$preco = $_POST['preco'];

$sql = "UPDATE planos SET preco='$preco' WHERE id=$id";

if ($conn->query($sql) === TRUE) {                                                            
echo "Atualizado con sucesso";
}
else{
	echo "Erro:". $conn->error;
}
 $conn->close();
?>