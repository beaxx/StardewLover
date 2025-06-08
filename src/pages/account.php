<?php
include '../backend/connection.php';
session_start();
?>

<!-- se for adm dar a opção de criar user e ver user, se não, não. -->

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
                        <a href="formCad.php">
                            <input type="button" value="Register users" id="passChange">
                        </a>
                        <a href="../pages/dashboard.php">
                            <input type="button" value="View users" id="passChange">
                        </a>
                    </div>
                </div>
                <div class="account-info">
                    <div class="content-info">
                        <div class="infos">
                            <span class="info"><b>Name:</b> <?php echo $_SESSION['name']; ?></span>
                            <span class="info"><b>Username:</b> <?php echo $_SESSION['username']; ?></span>
                        </div>
                        <div class="infos">
                            <span class="info"><b>Status:</b> 
                                <?php 
                                    if($_SESSION['status'] == 0) {
                                        echo "Inativo";
                                    } else if($_SESSION['status'] == 1){
                                        echo "Ativo";
                                    }else{
                                        echo "Bloqueado";
                                    }
                                ?>
                            </span>
                            <span><b>Amount of acess:</b> <?php echo $_SESSION['access']; ?></span>
                            <span><b>Type:</b>
                               <?php 
                                    if($_SESSION['type'] == 0) {
                                        echo "Admin";
                                    } else{
                                        echo "User";
                                    }
                                ?>
                            </span>
                        </div>
                    </div>      
                    <a href="formPass.php">
                        <input type="button" value="Change password" id="passChange">
                    </a>
                    <a href="../backend/logOut.php">
                        <input type="button" value="Log out" id="passChange">
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>