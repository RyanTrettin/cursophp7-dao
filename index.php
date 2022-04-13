<?php

require_once("config.php");

//Carrega o usuário
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//$lista = Usuario::getList();
//echo json_encode($lista);

$usuario = new Usuario();

$usuario->login("Pedro Pinto","12344556");

echo $usuario;

?>