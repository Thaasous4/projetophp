<?php

// Conexão com o banco de dados
$servername = "aqx5w9yc5brambgl.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "toeh3ckwvusnwp49";
$password = "i7tdti42g3v0wae7";
$db_name = "xcerv1b1wszf4i7z";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;
