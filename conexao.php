<?php
$dbHost = 'localhost';
$dbUserName = 'root';
$dbPassword = 'admin';
$dbName = 'msm';

$conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

// if ($conexao->connect_error) {
//     echo "Error connecting to";
// }else{
//     echo "conection oka";
// }

?>
