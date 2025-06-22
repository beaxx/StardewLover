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
    <link rel="stylesheet" href="../styles/media-query.css">
    <title>Account</title>
</head>
    <body>
        <img src="../assets/images/exit.png" alt="letter X" class="exit">
        <input type="checkbox" class="exit-button">
        <div class="content-menu disappear">
            <div class="border-menu">
                <nav class="menu">
                    <ul>
                        <img src="../assets/images/icon.png" alt="Chicken" class="icon">
                        <li><a href="./home.php">Home</a></li>
                        <li><a href="./home.php#about">About</a></li>
                        <li><a href="./home.php#creator">Creator</a></li>
                        <li><a href="./home.php#characters">Characters</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="body">
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
                            <?php
                                if ($_SESSION['type'] == 0) {
                                    echo '<a href="formCad.php">
                                        <button id="passChange">Register users</button>
                                    </a>';
                                    echo '<a href="../pages/dashboard.php">
                                        <button id="passChange">View users</button>
                                    </a>';
                                }else{
                                    echo '<a href="../backend/deleteAccount.php">
                                        <button id="passChange">Delete Account</button>
                                    </a>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="account-info">
                        <div class="content-info">
                            <span class="info"><b>Name:</b> <?php echo $_SESSION['name']; ?></span>
                            <span class="info"><b>Username:</b> <?php echo $_SESSION['username']; ?></span>
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
                        <div class="buttons">
                                <a href="formPass.php">
                                    <button id="passChange">Change password</button>
                                </a>
                                <a href="../backend/logOut.php">
                                    <button id="passChange">Log out</button>
                                </a>
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>