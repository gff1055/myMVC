<?php

namespace App\Controllers;

use SON\Controller\Action;
use \SON\Di\Container;

//classe controller
class Index extends Action{

	// action
	public function index(){

		$artigo = Container::getClass('Artigo');
		//recebendo nova instancia da classe

		$artigos = $artigo->find(1);
		
		$this->view->artigos = $artigos;
		//atribuindo dados para a view: adicionando o atributo $nomes ao objeto view

		$this->render('index');
		//renderizando: a variavel é passada para a pagina		
	}

	// action
	public function empresa(){
		$this->render('empresa');
	}
}

?>