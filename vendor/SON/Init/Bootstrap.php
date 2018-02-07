<?php

/*
* Classe de configuracao = configura tudo que precisar para rodar a aplicacao
*/

namespace SON\Init;

abstract class Bootstrap{

	/* Atributo das rotas */
	private $routes;

	/* construtor */
	public function __construct(){

		/* inicializando as rotas */
		$this->initRoutes();

		//recebendo a rota inserida pelo usuario
		$rota=$this->getUrl();

		// verificando se a rota existe
		$this->run($rota);

	}

	/* Metodo para inicializar as rotas */
	abstract protected function initRoutes();

	//metodo para mostrar se a rota foi encontrada ou nao
	protected function run($url){

		//percorrendo o array de rotas em busca da rota digitada
		array_walk($this->routes, function($route) use($url){
			if($url == $route['route']){

				// class recebe o nome da classe controller associada a rota $url
				$class = "App\Controllers\\".ucfirst($route['controller']);

				// action recebe o nome do metodo(action) da classe controller associada a rota $url
				$action = $route['action'];

				// instanciando a classe controller
				$controller = new $class;

				// chamando o metodo(action)
				$controller->$action();


			}
		});
	}


	/* Metodo para setar as rotas inicializadas no atributo de rotas($routes) da classe*/
	protected function setRoutes(array $routes){

		$this->routes=$routes;

	}


	/* Metodo para retornar a rota de uma URL*/
	protected function getUrl(){

		/*  */
		return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

	}
}





?>