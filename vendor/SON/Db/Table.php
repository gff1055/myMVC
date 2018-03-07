<?php

namespace SON\Db;

class Table{

	protected $db;
	protected $table;

	public function __construct(\PDO $db){

		$this->db=$db;

	}

	// metodo para listar todos os registros da tabela
	public function fetchAll(){
		$query = "Select * from {$this->table}";
		return $this->db->query($query);
	}

	public function find($id){
		$query = "Select * from {$this->table} where id=:id";
		$stmt=$this->db->prepare($query);
		$stmt->bindParam(":id",$id);
		$stmt->execute();

		$res=$stmt->fetch();
		return $res;
	}


}

?>