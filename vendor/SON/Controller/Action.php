<?php

namespace SON\Controller;


// Objetivo da View: ficar com os dados da view
class Action{

	protected $view;
	protected $action;

	//construtor
	public function __construct(){
		
		$this->view = new \stdClass;
		//criando um objeto vazio com a clase padrao do PHP

	}


	//Vai adivinhar em qual metodo(action) se esta executando. E de acordo com isso vai renderizar o template (include)
	public function render($action, $layout=true){

		$this->action = $action;
		// recebendo o nome da action atual

		if($layout==true && file_exists("../App/views/layout.php")){

			include_once '../App/views/layout.php';
			//chamando o layout
		}

		else{

			//chamando o conteudo da action
			$this->content();
			
		}
	}

	// metodo para imprimir o conetudo da action atual
	public function content(){

			$atual=get_class($this);
			// pegando o nome completo da classe(namespace\classe) que esta sendo executada no momento

			$nomeClass = str_replace("App\\Controllers\\","",$atual);
			//o namespace da classe é retirado e atribuido a variavel ($nomeClass) apenas o nome da mesma

			$singleClassName=strtolower($nomeClass);
			// variavel recebe o nome da classe toda em letra minuscula

			include_once '../App/views/'.$singleClassName.'/'.$this->action.'.php';
	}


}

?>