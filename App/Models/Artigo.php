<?php

namespace App\Models;

class Artigo{

	protected $db;

	public function __construct(\PDO $db){

		$this->db=$db;

	}

	// metodo para listar todos os registros da tabela
	public function fetchAll(){
		$query = "Select * from artigos";
		return $this->db->query($query);
	}


}

?>