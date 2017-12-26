<?php
$user = 'root';
$host = 'localhost';
$password = 'Abcde+12345'; 
$database = 'salao';

$conn = mysqli_connect($host, $user, $password, $database) or die ("Não foi possível conectar ao banco de dados");

?>