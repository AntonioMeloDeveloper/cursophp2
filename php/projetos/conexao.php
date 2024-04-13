<?php 
$host = "localhost";
$db = "clientes";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno){
    die("falha na conexão com o servidor");
}
?>