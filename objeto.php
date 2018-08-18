
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Orientação a objetos</title>
</head>
<body>
	<!-- Chamando os parametros da class Usuario -->
	<?php require 'class.php';?>
	<?php
	$usuario = new Usuario();
	echo $usuario->getDadosUser("Fernando", "ferexx8@gmail.com");
	?>
	<!-- Metodo e atributos -->
	<?php require 'class.php';?>
	<?php
	$operario = new Operario();
	echo $operario->setOperario("Ferex rodrigues", 993170700);
	echo $operario->getOperario();
	// imprimindo funcões com valores 
     echo "<br>"."<br>";
	$operario->setNota(2,2,6);
	echo $operario->getNota();
	?>
</body>
</html>