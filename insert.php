<?php
include "conexao.php";

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$abrangencia = $_POST['abrangencia'];
$foto = $_POST['foto'];

$sql = "INSERT INTO planos (nome, preco, abrangencia, foto) VALUES ('$nome', '$preco', '$abrangencia', '$foto')";
if($conn->query($sql) === TRUE){
	echo "Usuário inserido com sucesso";
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}
?>