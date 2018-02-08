<?php

/* Init: Classe de inicializacao */

namespace App;
use SON\Init\Bootstrap;






class Init extends Bootstrap{


	/* Metodo para inicializar as rotas e setar as rotas*/
	public function initRoutes(){

		/* inicializando rotas */
		$ar['home'] = array('route'=>'/myMVC/public/','controller'=>'index','action'=>'index');
		$ar['empresa'] = array('route'=>'/myMVC/public/empresa','controller'=>'index','action'=>'empresa');
		
		/* Gravando as rotas no atributo de rotas */
		$this->setRoutes($ar);
	}

}


?> 
