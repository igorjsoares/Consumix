<?php
require_once 'vendor/autoload.php';

$cansaco = $_GET['cansaco'];

$usuario = new \App\Model\Usuario();
$usuariosDao = new \App\Model\usuariosDao();

$usuario->setCansaco($cansaco);
$resultado = $usuariosDao->criarCansaco($usuario);

var_dump($resultado);