<?php

	function ep() {
		if (isset($_POST['ep'])) {
			$_POST['ep'];
			$_SESSION['ep'] = 1;
		} else {
			$_SESSION['ep'] = 0;	
		} 
		return $_SESSION['ep'];
	} 

	function ppi() {
		if (isset($_POST['ppi'])) {
			$_SESSION['ppi'] = 1;
		} else {
			$_SESSION['ppi'] = 0;
		}
		return $_SESSION['ppi'];
	}

	function def() {
		if (isset($_POST['def'])) {
			$_SESSION['def'] =  1;
		} else {
			$_SESSION['def'] = 0;
		}
		return $_SESSION['def'];
	}

	function np() {
		if (isset($_POST['np'])) {
			$np = $_POST['np'];
		} return $np;
	}
	
	function renda() {
		if ($_POST['np'] == 0 || $_POST['np'] == '') {
			$renda = "Você precisa dizer o numero de pessoas no núcleo familiar!";
		} else if (isset($_POST['renda'])) {
			$renda = 1;
		} else {
			$renda = 0;
		} return $renda;
	}



?>
