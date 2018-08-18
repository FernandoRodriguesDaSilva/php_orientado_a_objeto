<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php include_once 'class.php';
	$notas = new Nota();

	$notas->setNota("Fernando","Física",4,2);
	echo $notas->getNota();
	 ?>
</body>
</html>