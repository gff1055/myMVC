<?php

namespace SON\Controller;


// Objetivo da View: ficar com os dados da view
class Action{

	protected $view;

	//construtor
	public function __construct(){
		
		$this->view = new \stdClass;
		//criando um objeto vazio com a clase padrao do PHP

	}


	//Vai adivinhar em qual metodo se esta executando. E de acordo com isso vai renderizar o template (include)
	public function render($action){

		$atual=get_class($this);
		// pegando o nome completo da classe(namespace\classe) que esta sendo executada no momento

		$nomeClass = str_replace("App\Controllers\\","",$atual);
		//nomeClass recebe o nome da classe sem o namespace

		$singleClassName=strtolower($nomeClass);
		// variavel recebe o nome da classe toda em letra minuscula

		include_once '../App/views/'.$singleClassName.'/'.$action.'.php';

	}


}

?>