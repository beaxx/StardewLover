<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'littlefarm';


$mysqli = new mysqli($host, $user, $pass, $database);

if(!$mysqli){
    die("The Connection Failed :/ -> " . mysqli_connect_error());
}
mysqli_select_db($mysqli, $database);
