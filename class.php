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
// As classes filhas herdam essa function
	abstract function calcularJuros();

	function verValor(){
		return "<p>Valor do cheque é R$ {$this->valor} ele é do tipo {$this->tipo}</p>";
	}
// converter para real só pode ter na class pai porque tem final
	final function real($valor){
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

///////////////////// Fim Trabalhando com classes abstratas ////////////

// Interface

interface ICurso{
	public function disciplina($NomeDisciplina);

	public function professor($NomeProfessor);
}
				// indicar para usar interface
class CursoGraduacao implements ICurso {
	public $NomeDisciplina;
	public $NomeProfessor;
//////////////////// indicar os metodos abstratos ////////////////////
	public function disciplina($NomeDisciplina){
		$this->NomeDisciplina = $NomeDisciplina;
		return "A Disciplina escolhida é: {$this->NomeDisciplina}<br>";
	}
	public function professor($NomeProfessor){
		$this->NomeProfessor = $NomeProfessor;
		return "Professor: {$this->NomeProfessor}";
	}
}

class CursoPosGraduacao implements ICurso{

	public $NomeDisciplina;
	public $NomeProfessor;

	public function disciplina($NomeDisciplina){ 
		$this->NomeDisciplina = $NomeDisciplina;
		return "A Disciplina escolhida é: {$this->NomeDisciplina}<br>";
	}

	public function professor($NomeProfessor){ 
		$this->NomeProfessor = $NomeProfessor;
		return "Professor: {$this->NomeProfessor}";
	}
}

// fim  Interface

/////////////////////// atributos e metodos estaticos //////////////////
class Disciplina {
	public $aluno = "Fernando";
	public $notatrabalho;
	public $notaprova;
	public static $media;

	function __construct($aluno,$notatrabalho,$notaprova){
		$this->aluno = $aluno;
		$this->notaprova = $notaprova;
		$this->notatrabalho = $notatrabalho;
		self::$media = $this->notaprova + $this->notatrabalho;
	}
// atributo estatico 
	function situacao(){
		if(self::$media >= 7){
			return "O aluno {$this->nome} teve " . self::$media . ", com essa nota ele foi aprovado";
		}else {
			return "O aluno {$this->nome} teve " .self::$media . ", então ele foi reprovado";
		}
	}
// metodo static não aceita $this (self não faz parte do objeto)
	static function situacaoAluno(){
		if(self::$media >= 7){
			return "O aluno teve " . self::$media . ", com essa nota ele foi aprovado";
		}else {
			return "O aluno teve " .self::$media . ", então ele foi reprovado";
		}
	}

}
///////////////// Fim atributos e metodos estaticos /////////////



// Atributos e metodos public
class Funcionario{
	public $nome;
	public $salario;

	function setNome($nome){
		$this->nome = $nome;
	}
	function setSalario($salario){
		$this->salario = $salario;
	}
	// Formatando o valor do salario
	public function ValidarSalario($salario){
		if(is_numeric($salario)and($salario > 0)){
			return $this->salario = number_format($salario, '2',',','.');
		}else {
			die("Salario invalido");
		}
	}

	public function verSalario(){
		$this->salario = $this->ValidarSalario($this->salario);
		return "o funcionario {$this->nome} tem o salário de R$ {$this->salario}";
	}
}

// Atributos e metodos private

class FuncionarioPrivate{
	public  $nome;
	private  $salario;

	function setNome($nome){
		$this->nome = $nome;
	}

	function setSalario($salario){
		$this->salario = $salario;
	}

	public function verSalario(){
		return "<p>o funcionario {$this->nome} tem o salário de R$ {$this->salario};</p>";
	}
   // class exclusiva
	private function ValidarSalario(){
		if(is_numeric($salario)and($salario > 0)){
			return $this->salario = number_format($salario, '2',',','.');
		}else {
			die("Salario invalido");
		}
	}
}

//////////////////// fim  Atributos e metodos private /////////////////

// Atributos e metodos private

class FuncionarioProtected{
	public $nome;
	private $salario;
	protected $bonus;

	function setNome($nome){
		$this->nome = $nome;
	}

	function setSalario($salario){
		$this->salario = $salario;
	}

	public function verSalario(){
		return "<p>o funcionario {$this->nome} tem o salário de R$ {$this->salario} e o bônus é {$this->bonus};</p>";
	}
   // class exclusiva
	private function ValidarSalario(){
		if(is_numeric($salario)and($salario > 0)){
			return $this->salario = number_format($salario, '2',',','.');
		}else {
			die("Salario invalido");
		}
	}

	protected function bonus($bonus){
		$this->bonus = $bonus;
	}
}

class Bonus extends FuncionarioProtected{
	public function verSalario(){
		parent::bonus(2500);
		return parent::verSalario();
	}
}

// conexao com banco de dados
class Conn {
    public static $Host = "localhost";
    public static $User = "root";
    public static $Pass = "root";
    public static $Dbname = "selke";
    private static $Connect = null;
    
    private static function Conectar() {
        try {
            if(self::$Connect == null):
                self::$Connect = new PDO('mysql:host=' . self::$Host .';dbname='.self::$Dbname, self::$User, self::$Pass);
            endif;            
        } catch (Exception $ex) {
            echo 'Mensagem: ' . $ex->getMessage();
            die;
        }       
        return self::$Connect;
    }
    public function getConn() {
        return self::Conectar();
    }
    
}