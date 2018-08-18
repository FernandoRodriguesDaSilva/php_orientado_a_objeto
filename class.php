<?php 
class Usuario{
	public $nome;
	public $email;

	function getDadosUser($nome,$email){
		return "O usuario {$nome} tem o email {$email}"."<br>"."<br>";
	}
}

class Operario{
	public $name_func;
	public $telefone_func;
	public $prova1;
	public $prova2;
	public $prova3;
// setar as variaveis
	function setOperario($name_func,$telefone_func){
		$this->name_func = $name_func;
		$this->telefone_func = $telefone_func;
	}
// Pegar as variaveis
	function getOperario(){
		return "Nome do funcionario é : {$this->name_func} e o seu telefone é {$this->telefone_func}";
	}
	function setNota($prova1, $prova2,$prova3){
		$this->prova1 = $prova1;
		$this->prova2 = $prova2;
		$this->prova3 = $prova3;
	}
	function getNota(){
		return "A nota da prova do function :".  
		$this->name_func ."foi :". $this->prova1  +  $this->prova2 + $this->prova3 / 2;
	}
}

class Nota{
	public $aluno;
	public $prova;
	public $disciplina;
	public $trabalho;

	function setNota($aluno,$disciplina,$prova,$trabalho){
		$this->aluno = $aluno;
		$this->disciplina = $disciplina;
		$this->prova = $prova;
		$this->trabalho = $trabalho;
	}

	function getNota(){
		return "nome do aluno é: ".$this->aluno . "<br>".  
		"Disciplina: ". $this->disciplina . "<br>". "nota: ".  ($this->prova + $this->trabalho) /2 . "<br><hr>";
	}
}

/* Pessoa fisica e juridica */

Class Cliente{
	public $endereco;
	public $bairro;

	function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	function setBairro($bairro){
		$this->bairro = $bairro;
	}

	function verEndereco(){
		return "<p>Endereço: {$this->endereco}, localizado no jardim {$this->bairro}</p>";
	}

}
// Trabalhando com Herança
class ClientePessoaFisica extends Cliente{
	public $cpf;
	public $nome;

	function setCpf($cpf){
		$this->cpf = $cpf;
	}

	function setNome($nome){
		$this->nome = $nome;
	}

	function verEndereco(){
		return "<p> O meu Nome  é : {$this->nome}</p>".
		"<p>Meu cpf é :{$this->cpf}</p>".
		"<p>Meu endereço fixo é {$this->endereco} </p>".
		"<p>Morro no bairro: {$this->bairro}</p><br>";
	}
}

class ClientePessoaJuridica extends Cliente{
	public $nomefantasia;
	public $cnpj;

	function setNomeFantasia($nomefantasia){
		$this->nomefantasia = $nomefantasia;
	}
	function setcnpj($cnpj){
		$this->cnpj = $cnpj;
	}

	function verEndereco(){
		return "<p>O nome da empresa é: {$this->nomefantasia} </p>".
		"<p>O endereco da empresa é: {$this->endereco}</p>".
		"<p>O bairro da empresa é:{$this->bairro} </p>".
		"<p>O cnpj da empresa é: {$this->cnpj}</p>";
	}
}

/* Fim Pessoa fisica e juridica */

// Trabalhando com classes abstratas

abstract class Cheque{
	public $valor;
	public $tipo;

	function __construct($valor,$tipo){
		$this->valor = $valor;
		$this->tipo = $tipo;
	}
	function verValor(){
		return "<p>Valor do cheque é R$ {$this->valor} ele é do tipo {$this->tipo}</p>";
	}
// converter para real
	function real($valor){
		return number_format($valor,'2',',','.'); 
	}
}

class ChequeComum extends Cheque {
	function calcularJuros(){
		$this->valor = $this->valor * 5.25;
		//converter o valor usando a function real
		$this->valor = parent::real($this->valor);
		// imprime o valor já convertido
		return "valor do cheque com juro é : R$ {$this->valor}";
	}
}

class ChequeEspecial extends Cheque{
	function calcularJuros(){
		$this->valor = $this->valor * 10.25;
		$this->tipo = $this->tipo;
		$this->valor = parent::real($this->valor);
		return "O valor do cheque especial é : R$ {$this->valor}" .
		 " ele é do tipo {$this->tipo}";
	}
}

//Fim Trabalhando com classes abstratas

// Métodos abstratas



