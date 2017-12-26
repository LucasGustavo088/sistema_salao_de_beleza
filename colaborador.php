<!doctype html>
<title>colaborador</title>
<head>
	<meta charset="utf-8"/>
</head>
<?php
session_start();
include_once("conexao.php");

echo "bem vindo ".$_SESSION['nomeUsuario']." seu nivel de acesso é: ".$_SESSION['nivelUsuario'];


?>
<html/>