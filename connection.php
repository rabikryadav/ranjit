<?php

$server = 'localhost';
$database = 'ranjit';
$user = 'root';
$password = '';

$connection = mysqli_connect($server, $user, $password, $database);

if ($connection) {
	echo "<center>connected with database</center>";
}else{
	echo "connection faild";
}

?>