<?php
include '../backend/connection.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $status = $_POST['status'];
    $type = $_POST['type'];

    $sql = "UPDATE users SET name='$name', status='$status', type='$type' WHERE username='$username'";

    if ($mysqli->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
    
    header("Location: ../pages/dashboard.php");
}
?>
