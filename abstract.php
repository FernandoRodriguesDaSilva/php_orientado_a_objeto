<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Usando class Abstract</title>
</head>
<body>
	<?php
		require_once "class.php";
		$cheque_Comum = new ChequeComum(1200,"comum");
		echo $cheque_Comum->calcularJuros();
		echo "<br><hr>";
		$cheque_especial = new ChequeEspecial(1200,"especial");
		echo $cheque_especial->calcularJuros();

	?>
</body>
</html>