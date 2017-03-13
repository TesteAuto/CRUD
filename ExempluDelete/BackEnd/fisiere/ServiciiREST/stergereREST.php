<?php

require_once(VENDOR."autoload.php");
require_once(BazeDate."stergereBD.php");
require_once(ServiciiREST."principal.php");

function stergere($id){
	$app = \Slim\Slim::getInstance();
	$db = new Stergere();
	Principal::deleteServ($db, $id);
	unset($app);
	unset($db);
	R::close();
}

?>