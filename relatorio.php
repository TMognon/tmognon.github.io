<?php 
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>UFSC Project</title>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">UFSC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav col-3">
      <li class="nav-item active">
        <a class="nav-link" href="#">Documentos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sobre.php">Sobre</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
	

<?php

	include "action.php";
	include "func_oc.php";	
?>
	<table class="table">			

<?php
	echo oc();
?>
	</tbody>
</table>
<div class="imp" class="float-right">
	<a href="#" class="float-right" onclick="print();">Imprimir</a>	
	<br><br>
</div>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead"><strong>Atenção!</strong> Este site foi desenvolvido por um humano e está suscetível a erros como qualquer merda que eu faço, então dê uma conferida no edital antes de botar pra foder, obrigado!</p>
  </div>
</div>

<?php include "footer.php";?>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>