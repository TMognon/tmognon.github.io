<?php

	session_start();

	include 'action.php';
	 
	$ep = ep();
	$ppi = ppi();
	$def = def();
	$renda = renda();
	$np = np();
	$np = intval($np);
	$i = 0;

	$_SESSION['def'] = def();
	$_SESSION['ep'] = ep();
	$_SESSION['ppi'] = ppi();
	$_SESSION['np'] = np();



?>
<!DOCTYPE html>
<html>
<head>
	<title>UFSC DOCs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<?php include("nav.php");?>
<div class="container">

	<form action="relatorio.php" method="post">
		<table class="table table">
			<tr>
			<?php 
			if($np == 0 || !$np){
				header('location:relatorio.php');
			} else {


				while ($i < $np) { ?>
					<th scope="col"> 
						<?php echo "Pessoa " . $i;
						$i++; ?> 
					</th>
					<th>
						Ocupação: 
						<select name="oc[]" id="oc" class="custom-select">
							<option value="0" name='oc[]'>Escolha a ocupação</option>
							<option value="1" name='oc[]'>Trabalhor(a) assalariado(a)</option>
							<option value="2" name='oc[]'>Trabalhador(a) autonomo(a)</option>
							<option value="3" name='oc[]'>Trabalhador(a) com rendimentos informais</option>
							<option value="4" name='oc[]'>Aposentado(a), pensionista ou em auxílio previdenciário</option>
							<option value="5" name='oc[]'>Recebedor(a) de pensão alimentícia ou ajuda financeira</option>
							<option value="6" name='oc[]'>Estagiário(a) ou bolsista</option>
							<option value="7" name='oc[]'>Proprietário(a) de empresa/microempresas</option>
							<option value="8" name='oc[]'>MEI</option>
							<option value="9" name='oc[]'>Trabalhador(a) em atividade rural</option>
							<option value="10" name='oc[]'>Desempregado(a) ou trabalhador(a) do lar</option>
							<option value="11" name='oc[]'>Das pessoas que auferem rendimentos de aluguel</option>
							<option value="12" name='oc[]'>Pescador(a)</option>
							<option value="13" name='oc[]'>Menor de idade</option>
						</select>
					</th>
			</tr>
				 <?php
				} 
			}
			?>
		</table>
		<input type="submit">
	</form>
	</div>
</body>
</html>
