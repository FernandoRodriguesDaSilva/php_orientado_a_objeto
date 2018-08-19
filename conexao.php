<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		include_once "class.php";
		$conn = new Conn();
		$conn->getConn();

		var_dump($conn);
	?>
</body>
</html>

