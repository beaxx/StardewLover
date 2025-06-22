<?php
include '../backend/connection.php';
session_start();

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $sql = "SELECT username, name, status, type FROM users WHERE username = '$username'";
    $result = $mysqli->query($sql);

    if($result->num_rows > 0) {
        $line = $result->fetch_assoc();
        $name = $line['name'];
        $status = $line['status'];
        $type = $line['type'];

    } else {
        echo "Usuário não encontrado!";
        exit();
    }
}

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
    <title>Change user information</title>
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
                <form action="../backend/changeUser.php" method="post">
                    <div class="info-user">
                    <span>User registration</span>
                        <div class="username">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" value="<?php echo $line['username']?>" readonly>
                        </div>
                        <div class="user">
                            <label for="username">Name</label>
                            <input type="text" name="name" id="user" value="<?php echo $line['name']?>">
                        </div>
                        <div class="status">
                            <label for="status">Status</label>
                            <input type="text" name="status" id="status" value="<?php echo $line['status']?>">
                        </div>
                        <div class="type">
                            <label for="type">Type</label>
                            <select name="type" id="type">
                                <option value="1" name="type">User</option>
                                <option value="0"  name="type">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttonsCad">
                        <input type="reset" value="Reset" id="reset">
                        <input type="submit" value="Register" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>