<?php

$cansaco = $_GET['cansaco'];

$usuario = new \App\Model\Usuario();
$usuariosDao = new \App\Model\usuariosDao();

$usuariosDao->criarCansaco($usuario);