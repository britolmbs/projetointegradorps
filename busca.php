<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>Plano de Saúde</title>
  </head>
  <body>
  <header>
  <div class="container text-center">
    <img src="img/plano.jpg">

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="select.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="select.php">Planos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contato
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="form.php">Inserir Planos</a>
          <a class="dropdown-item" href="atualiza.php">Atualizar Planos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="excluir.php">Excluir Plano</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="busca.php">
      <input class="form-control mr-sm-2" name="nome" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">pesquisar</button>
    </form>
  </div>
</nav>
</div>
</header>
<section>
	<div class="container">
		<img src="img/plano2.jpg">
<p>&nbsp;</p>
<div class="card card-header bg-dark text-white text-center"><h3>Nossos Planos</div></h1>
<div class=" row card card-body">





<?php
include "conexao.php";

$busca= $_POST['nome'];

$sql = "SELECT * FROM planos WHERE UPPER (nome)= UPPER('$busca')";
$result = $conn->query($sql);

if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo '<div class="card card-header bg-secundary text-center h5"> Plano: '.$row['nome'].'</div>';
		echo "<div class='col-md-4 col-lg-12 text-center'>";
		echo "<img src='img/".$row['foto']."'>";
		echo '<p class=" card-body card-text h6">Preço do Plano: R$'.$row['preco'];
		echo '<p class=" card-body card-text h6">Abrangencia: '.$row['abrangencia'].'<br/>';
		echo "<a class='btn btn-outline-danger'>Contratar</a>";
		echo "</div>";
	}
}
else{
	echo "0 resultados";
}
$conn->close();
?>

</div>

	</div>
</section>
<footer class="container-fluid text-center">
<p>&nbsp;</p>
	<nav class="nav nav-pills nav-justified">
  <a class="nav-item nav-link active" href="select.php">Homer</a>
  <a class="nav-item nav-link" href="#">Planos</a>
  <a class="nav-item nav-link" href="#">Contatos</a>
  
</nav>
</footer>

    <!-- Fim Navbar -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>