<?php require './vendor/autoload.php'; 
// criando um apelido home para class ConfigController
use Core\ConfigController as Home;
$url = new Home();
$url->carregar();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>