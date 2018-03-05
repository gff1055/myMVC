<?php

// Essa classe tem a responsabiidade de resolver as dependencias(conexao do banco de dados, etc...

namespace SON\Di;


class Container{

	public static function getClass($name){

		$str_class = "\App\Models\\".ucfirst($name);
		// recebendo o nome completo da classe

		$init = \App\Init::getDb();
		// recebendo a conexao

		$class = new $str_class($init);
		// variavel recebendo a referencia usando a conexao retornada e o nome completo da classe
		
		return $class;
		// retornando referencia à classe model requisitada
		


	}

}

?>