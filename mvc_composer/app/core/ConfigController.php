<?php
// apelido usado em psr-4 para Core
namespace Core;

class ConfigController{
	private $url;
	private $urlConjunto;
	private $urlControlle;
	private $urlMetodo;

	public function __construct(){
		if(!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))){
			$this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
			$this->urlConjunto = explode("/", $this->url);
			
			if((isset($this->urlConjunto[0])) AND (isset($this->urlConjunto[1]))){
				$this->urlControlle = $this->urlConjunto[0];
				$this->urlMetodo = $this->urlConjunto[1];
			}else {
				$this->urlControlle = 'home';
				$this->urlMetodo = 'index';
			}
		}else {
			$this->urlControlle = 'home';
			$this->urlMetodo = 'index';
		}
		echo "Classe: {$this->urlControlle} - Método : {$this->urlMetodo} <br>";
	}

	public function carregar(){
		$classe = "\\Sts\\Controllers\\".$this->urlControlle;
		$classeCarregar = new $classe;
		$classeCarregar->index();
	}
}
