<?php
include 'conexao.php';

$id = $_POST['id'];

$sql = "DELETE FROM plano WHERE id=$id";

if ($conn->query($sql) === TRUE) {                                                            
echo "Plano Excluido com sucesso";
}
else{
	echo "Erro:". $conn->error;
}
 $conn->close();
?>