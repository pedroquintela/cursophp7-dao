<?php

/*
require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

require_once("config.php");

// CARREGA UM USUÁRIO
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//CARREGA UMA LISTA DE USUARIOS
//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Jose", "!@#$%");
//echo $usuario;

//criando um novo usuario
//$aluno = new Usuario("aluno", "@alun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadbyId(6);

$usuario->update("professor", "!@#$123");

echo $usuario;

?>