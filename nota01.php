<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nota php</title>
</head>
<body>
	<div>
		<?php 
		$n1 = isset($_GET["n1"])?$_GET["n1"]:0;
		$n2 = isset($_GET["n2"])?$_GET["n2"]:0;
		$s = ($n1 + $n2)/2;
		echo"A media da sua prova é $s<br>";
		if ($s < 6) {
			echo"Reprovado";
		}
		else{
			echo "Aprovado";
		}
		?> 
		<br>
		<a href="nota.html">Voltar</a>
	</div>

</body>
</html>