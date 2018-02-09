<?php

namespace App\Controllers;


//classe controller
class Index{

	// action
	public function empresa(){
		include '../App/views/Index/Empresa.php';
	}


	// action
	public function index(){
		include '../App/views/Index/Index.php';;
	}

}

?>