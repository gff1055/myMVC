<?php

/* Init: Classe de inicializacao */

namespace App;

class Init{

	/* Atributo das rotas */
	private $routes;

	/* construtor */
	public function __construct(){

		/* inicializando as rotas */

		$this->initRoutes();

		$this->run($this->getUrl());

	}

	/* Metodo para inicializar as rotas */
	public function initRoutes(){

		/* inicializando rotas */
		$ar['home'] = array('route'=>'/','controller'=>'index','action'=>'index');
		$ar['empresa'] = array('route'=>'/empresa','controller'=>'index','action'=>'empresa');
		
		/* Gravando as rotas no atributo de rotas */
		$this->setRoutes($ar);


	}

	public function run($url){

		array_walk($this->routes, function($route) use($url){
			if($url == $route['route']){
				echo "encontrou";
			}
		});
	}


	/* Metodo para setar as rotas inicializadas no atributo de rotas($routes) da classe*/
	public function setRoutes(array $routes){

		$this->routes=$routes;

	}


	/* Metodo para retornar a rota de uma URL*/
	public function getUrl(){

		/*  */
		return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

	}
	
}

?>