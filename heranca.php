<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php require_once "class.php"; 
	// Orientando a objetos
	$cliente = new Cliente();
	$cliente->setEndereco('Rua: Sante Tersigne');
	$cliente->setBairro('Jardim Icaraí');
	$cliente->verEndereco();
	// Orientando a objetos pessoa fisica
	$pessoafisica = new ClientePessoaFisica();
	$pessoafisica->setnome('Fernando Rodrigues da Silva');
	$pessoafisica->setcpf('354.728.278-09');
	$pessoafisica->setendereco('Rua: Pedro Ronchim');
	$pessoafisica->setbairro('Jardim Icaraí');
	// Orientando a objetos Pessoa Juridica
	$pessoajuridica = new ClientePessoaJuridica();
	$pessoajuridica->setnomefantasia('Ferex.corporation.com.br');
	$pessoajuridica->setcnpj('1254.32665.22541.23565');
	$pessoajuridica->setendereco('parque dos buritis');
	$pessoajuridica->setbairro('Jardim Brasileiro');
	// Retornando valores das classes
	echo $cliente->verEndereco();
	echo "<hr>";
	echo $pessoafisica->verEndereco();
	echo "<hr>";
	echo $pessoajuridica->verEndereco();
	?>
</body>
</html>