<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>UFSC matriculas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php include("nav.php");?>

	<div class="container">	
		<div class="card-text-center">	
			<div class="card-header">	
				<h5 class="card-title">Cotas</h5>
			</div>
			<div class="card-body">	
				<h6 class="card-subtitle mb-2 text-muted">Selecione as cotas</h6>
					<form action="arq.php" method="post" onsubmit="submit()">
					<ul class="list-group list-group-flush">	
						<li class="list-group-item">	
							<input type="checkbox" name="ep" id="check1" value="Escola publica">
							<label for="check1">Escola publica</label>
						</li>
						<li class="list-group-item">	
							<input type="checkbox" id="check2" name="ppi" value="PPI"> 
							<label for="check2">Para utodeclarados preto, pardo ou indígena: <br></label>
						</li>
						<li class="list-group-item">
							<input type="checkbox" id="check3" name="def" value="Com deficiência">
							<label for="check3">Pessoa com deficiencia</label>
						</li>
						<li class="list-group-item">
								Em caso de sua renda familiar bruta mensal for igual ou inferior a um salário minimo, Nº de pessoas no núcleo familiar: <input type="text" class="col-sm-1" id="np" name="np" value="">
						</li>
						<li class="list-group-item">	
							<input type="submit" class="btn bn-dark float-right">
						</li>
					</ul>
				</form>

				<?php include "footer.php";?>
			</div>
		</div>
	</div>
	</span>
	
	

</body>
</html>