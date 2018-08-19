<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Metodo public</title>
</head>
<body>
	<?php  include_once "class.php" ;
 	$funcionario = new Funcionario();
 	$funcionario->setNome("Fernando");
 	$funcionario->setSalario(5200);

 	echo $funcionario->verSalario();



	?>
</body>
</html>