<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES ('Paulo Augusto', '12345678') ");

$usuarios = $sql->select("SELECT * FROM tb_usuarios) ");

echo json_encode($usuarios);

?>