<?php

require_once("config.php");

//Carrega o usuário
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//$lista = Usuario::getList();
//echo json_encode($lista);

//busca Usuario com login e senha

//$usuario = new Usuario();
//$usuario->login("Pedro Pinto","12344556");
//echo $usuario;

//Cadastra novo usuário com login e senha

$aluno = new Usuario();

$aluno->setDeslogin("Aluno");
$aluno->setDessenha("12345");

$aluno->insert();

echo $aluno;

?>