<?php

namespace App\Controllers;


//classe controller
class Index{

	private $view;

	//construtor
	public function __construct(){

		//criando um objeto vazio
		$this->view = new \stdClass;

	}

	// action
	public function index(){

		$this->view->x = 1;

		$nomes = array();
		$nomes[] = "Guilherme";
		$nomes[] = "Ferreira";

		//adicionando o atributo $nomes ao objeto view
		$this->view->nomes = $nomes;

		// a variavel será passada para a pagina abaixo
		
		include '../App/views/Index/Index.php';;
	}


	// action
	public function empresa(){
		include '../App/views/Index/Empresa.php';
	}
}

?>