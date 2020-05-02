<?php 

require_once("config.php");

//carrega um user
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carrega uma lista de users
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista buscando pelo login
//$search = Usuario::search("jo")
//echo json_encode($search);

//carrega um user usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","tor");
echo $usuario;

 ?>