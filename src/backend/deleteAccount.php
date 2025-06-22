<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/icon.png" type="image/png">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/processPages.css">
    <title>Deactivate account</title>
</head>
<?php
    include 'connection.php';
    session_start();

    $sql = "UPDATE users SET status = '0' WHERE username = '" . $_SESSION['username'] . "'";
    $result = mysqli_query($mysqli, $sql);
    if($result){
           echo "<div class='error'>";
                echo "Account successfully deactivated.";
            echo "</div>";
            echo "<meta http-equiv='refresh' content='3;url=.../../index.php'>";
    } else {
            echo "<div class='error'>";
                echo "Error deactivating account: " . mysqli_error($mysqli);
            echo "</div>";
            echo "<meta http-equiv='refresh' content='3;url=.../../index.php'>";
    }
?>
