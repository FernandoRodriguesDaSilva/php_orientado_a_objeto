<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Privado</title>
</head>
<body>
	<?php include_once "class.php";

	$funcionario = new FuncionarioPrivate();
	$funcionario->setNome("Fernando");
	$funcionario->setSalario(4200);
	
	echo $funcionario->verSalario();



	 ?>
</body>
</html>