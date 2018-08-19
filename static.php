<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Metodo static</title>
</head>
<body>
	<?php require_once "class.php";
	$static = new Disciplina("Cesar",2,6);
	echo $static->situacao();
	echo "<hr>";
	echo $static::situacaoAluno();
	?>
</body>
</html>