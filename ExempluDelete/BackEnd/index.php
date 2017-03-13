<?php

require_once("constante.php");
require_once(VENDOR."autoload.php");
require_once(BazeDate."stergereBD.php");
require_once(ServiciiREST."stergereREST.php");

$app = new \Slim\Slim();

$app->delete('/stergere/:id', 'stergere');

$app->run();
?>
