<?php
require_once 'vendor/autoload.php';

$cansaco = $_GET['cansaco'];

$usuario = new \App\Model\Usuario();
$usuariosDao = new \App\Model\usuariosDao();

$usuariosDao->criarCansaco($usuario);