<?php
require_once '../vendor/autoload.php';

/*
App = nome do namespace definido no arquivo init.php
Init = nome da classe do arquivo init.php
*/

$init = new \App\Init;

/* retornando a rota */
echo $init->getUrl();


?>