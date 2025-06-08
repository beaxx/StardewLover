<?php

include 'connection.php';
session_start();

$username = $_POST['username'];
$password = $username . "123"; // senha padrão criada
$name = $_POST['name'];
$type = $_POST['type'];
$status = "1";      

$sql = "INSERT INTO users (username, password, name, type, status)
        VALUES ('$username', '$password', '$name', '$type', '$status')";

if(mysqli_query($mysqli, $sql)){
    echo "deu certo eee";
    header("Location: ../pages/account.php");
} else {
    echo "erro!";
}

mysqli_close($mysqli);

