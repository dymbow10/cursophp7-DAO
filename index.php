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
//$usuario = new Usuario();
//$usuario->login("root","!@#$");
//echo $usuario;


/*criando um user
$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor","!@#$%¨&*");

echo $usuario

 ?>