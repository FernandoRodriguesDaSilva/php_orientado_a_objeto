<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		require_once "class.php";
		$funcionario = new Bonus();
		$funcionario->setNome("Fernando");
		$funcionario->setSalario(5600);
		echo $funcionario->verSalario();
	 ?>
</body>
</html>