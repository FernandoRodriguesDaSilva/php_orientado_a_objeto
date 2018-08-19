<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Usando class Abstract</title>
</head>
<body>
	<?php
	require_once "class.php";
	$curso = new CursoGraduacao();
	$cursopos = new CursoPosGraduacao();

	echo $curso->disciplina("Desenvolvimento Web");
	echo $curso->professor("Cesar");
	echo "<hr>";
	echo $curso->disciplina("Framework");
	echo $curso->professor("Mauro");

	?>
</body>
</html>