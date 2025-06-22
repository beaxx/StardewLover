<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/icon.png" type="image/png">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/processPages.css">
    <title>Failed to change Password</title>
</head>
<?php
include 'connection.php';
session_start();

$oldPass = $_POST['oldPass'];
$newPass = $_POST['newPass'];
$confirmPass = $_POST['confirmPass'];

  if(password_verify($oldPass, $_SESSION['password'])) {
    if($newPass == $confirmPass){
        $oldPass = $_SESSION['password'];
        $newPass = password_hash($newPass, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET password = '$newPass' WHERE password = '$oldPass'";
        $result = mysqli_query($mysqli, $sql);
        if($result){
            header("location: ../pages/account.php");
        }
    }else{
        echo "<div class='error'>";
        echo "<img src='../assets/images/waning.png' style='width: 150px;'>";
        echo "<h2>ERROR!</h2>";
        echo "Failed to change password.<br> Please go back and try again.";
        exit();
    }
}else{
    echo "<div class='error'>";
    echo "<img src='../assets/images/waning.png' style='width: 150px;'>";
    echo "<h2>ERROR!</h2>";
    echo "Old password incorrect.<br> Please go back and try again.";
    exit();
}
mysqli_close($mysqli);