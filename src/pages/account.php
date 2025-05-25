<?php
include '../backend/connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/icon.png" type="image/png">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/account.css">
    <title>Account</title>
</head>
    <body>
        <img src="../assets/images/exit.png" alt="letter X" class="exit">
        <input type="checkbox" class="exit-button">
        <div class="content-menu sumir">
            <div class="border-menu">
                <nav class="menu">
                    <ul>
                        <img src="../assets/images/icon.png" alt="Chicken" class="icon">
                        <li><a href="./home.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Creator</a></li>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Food</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="border-account">
            <div class="account">
                <div class="you-info">
                    <div class="you">
                        <div class="profile">
                            <div class="border-img">
                                <img src="../assets/images/profile.png" alt="profile">
                            </div>
                        </div>
                        <div class="name">
                            <span><?php echo $_SESSION['name']?></span>
                            <img src="../assets/images/titleMenu.png" alt="title">
                        </div>
                    </div>
                    <div class="password">
                        <a href="formPass.php">
                            <input type="button" value="Mudar senha" id="passChange">
                        </a>
                        <a href="formCad.php">
                            <input type="button" value="Cadastrar usuario" id="passChange">
                        </a>
                    </div>
                </div>
                <div class="account-info">

                </div>
            </div>
        </div>
    </body>
</html>