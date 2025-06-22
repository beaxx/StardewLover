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
    <link rel="stylesheet" href="../styles/media-query.css">
    <title>Change password</title>
</head>
<body>
    <img src="../assets/images/exit.png" alt="letter X" class="exit">
    <input type="checkbox" class="exit-button">
    <div class="content-menu disappear">
        <div class="border-menu">
            <nav class="menu">
                <ul>
                    <img src="../assets/images/icon.png" alt="Chicken" class="icon">
                    <li><a href="./account.php">Account</a></li>
                    <li><a href="./home.php#about">About</a></li>
                    <li><a href="./home.php#creator">Creator</a></li>
                    <li><a href="./home.php#characters">Characters</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="content">
        <div class="border-form"></div>
            <div class="form">
                <form action="../backend/changePass.php" method="post">
                    <div class="info-user">
                    <span>Change your password</span>
                        <div class="user">
                            <label for="username">Old</label>
                            <input type="password" name="oldPass" id="user" required>
                        </div>
                        <div class="pass">
                            <label for="pass">New</label>
                            <input type="password" name="newPass" id="pass" required>
                        </div>
                        <div class="pass">
                            <label for="pass">Confirm</label>
                            <input type="password" name="confirmPass" id="pass" required>
                        </div>
                    </div>
                    <div class="buttonsCad">
                        <input type="reset" value="Limpar" id="reset">
                        <input type="submit" value="Entrar" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>