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
    <title>Create user</title>
</head>
<body>
    <img src="../assets/images/exit.png" alt="letter X" class="exit">
    <input type="checkbox" class="exit-button">
    <div class="content-menu sumir">
        <div class="border-menu">
            <nav class="menu">
                <ul>
                    <img src="../assets/images/icon.png" alt="Chicken" class="icon">
                    <li><a href="./account.php">Account</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Creator</a></li>
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Food</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="content">
        <div class="border-form"></div>
            <div class="form">
                <form action="../backend/cadUser.php" method="post">
                    <div class="info-user">
                    <span>User registration</span>
                        <div class="user">
                            <label for="username">Name</label>
                            <input type="text" name="name" id="user" required>
                        </div>
                        <div class="username">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" required>
                        </div>
                        <div class="type">
                            <label for="type">Type</label>
                            <select name="type" id="type">
                                <option value="1" name="type">User</option>
                                <option value="0"  name="type">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttons">
                        <input type="reset" value="Reset" id="reset">
                        <input type="submit" value="Register" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>