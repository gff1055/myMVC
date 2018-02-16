<?php

namespace App\Controllers;

use SON\Controller\Action;

//classe controller
class Index extends Action{

	

	// action
	public function index(){

		$nomes = array();
		$nomes[] = "Guilherme";
		$nomes[] = "Ferreira";
		
		$this->view->nomes = $nomes;
		//atribuindo dados para a view: adicionando o atributo $nomes ao objeto view

		$this->render('index');
		//renderizando: a variavel é passada para a pagina		
	}


	// action
	public function empresa(){
		include '../App/views/Index/Empresa.php';
	}
}

?>