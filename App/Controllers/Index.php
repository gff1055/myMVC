<?php

namespace App\Controllers;

use SON\Controller\Action;
use \App\Models\Artigo;

//classe controller
class Index extends Action{

	// action
	public function index(){

		$artigo = new Artigo(\App\Init::getDB())
		//chamando o model

		$artigos = $artigos->fetch_all();
		
		$this->view->artigos = $artigos;
		//atribuindo dados para a view: adicionando o atributo $nomes ao objeto view

		$this->render('index');
		//renderizando: a variavel é passada para a pagina		
	}

	// action
	public function empresa(){
		$this->render['empresa'];
	}
}

?>