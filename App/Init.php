<?php

/* Init: Classe de inicializacao */

namespace App;
use SON\Init\Bootstrap;

class Init extends Bootstrap{


	/* Metodo para inicializar as rotas e setar as rotas*/
	protected function initRoutes(){

		/* inicializando rotas */
		$ar['home'] = array('route'=>'/myMVC/public/','controller'=>'index','action'=>'index');
		$ar['empresa'] = array('route'=>'/myMVC/public/empresa','controller'=>'index','action'=>'empresa');
		
		/* Gravando as rotas no atributo de rotas */
		$this->setRoutes($ar);
	}

	// metodo para criacao de conexao com o banco de dados
	public static function getDB(){
		$db=new \PDO("mysql:host=localhost; dbname=mvc","root","root");
		return $db;
	}

	

}


?> 
