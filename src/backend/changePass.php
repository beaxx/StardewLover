<?php

include 'connection.php';
session_start();

$oldPass = $_POST['oldPass'];
$newPass = $_POST['newPass'];
$confirmPass = $_POST['confirmPass'];

if($_SESSION['password'] == $oldPass){
    if($newPass == $confirmPass){
        $sql = "UPDATE users SET password = '$newPass' WHERE password = '$oldPass'";
        $result = mysqli_query($mysqli, $sql);
        if($result){
            header("location: ../pages/account.php");
        }
    }else{
        echo "ERROR!<br>";
        echo "Failed to change password.<br> Please go back and try again.";
        exit();
    }
}else{
    echo "ERROR!<br>";
    echo "Old password incorrect.<br> Please go back and try again.";
    exit();
}
mysqli_close($mysqli);