<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/icon.png" type="image/png">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/processPages.css">
    <title>Failed to Login</title>
</head>
    <body>
        <?php

        include 'connection.php';
        session_start();
        
        $username = $_POST['username'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($mysqli, $sql);
     
        if($result && mysqli_num_rows($result) === 1){
            $line = mysqli_fetch_assoc($result);
            
            // Verifica se está bloqueado
            if ($line['status'] == '2') {
                echo "<div class='error'>
                <img src='../assets/images/waning.png' style='width: 150px;'>
                <h2>ERROR!</h2>
                Your account is <strong>blocked</strong>.
                </div>";
                exit();
             }
              // Verifica se está inativo
            if ($line['status'] == '0') {
                echo "<div class='error'>
                <img src='../assets/images/waning.png' style='width: 150px;'>
                <h2>ERROR!</h2>
                Your account is <strong>inactive</strong>.
                </div>";
                exit();
             }

            if(password_verify($password, $line['password'])) {
                $updateAccess = "UPDATE users SET acess = acess + 1, failed_attempts = 0  WHERE username = '$username'";
                mysqli_query($mysqli, $updateAccess);

                $_SESSION['username'] = $line['username'];
                $_SESSION['name'] = $line['name'];
                $_SESSION['status'] = $line['status'];
                $_SESSION['type'] = $line['type'];
                $_SESSION['failed_attempts'] = $line['failed_attempts'];
                $_SESSION['password'] = $line['password'];
                $_SESSION['access'] = $line['acess'] + 1;

                if($_SESSION['access'] == 1){
                    header("Location: ../pages/formPass.php");
                }else{
                    header("Location: ../pages/home.php");
                }
            } else {
                $newAttempts = $line['failed_attempts'] + 1;
                if ($newAttempts >= 3) {
                    // Bloqueia conta
                    $block = "UPDATE users SET failed_attempts = '$newAttempts', status = '2' WHERE username = '$username'";
                } else {
                    $block = "UPDATE users SET failed_attempts = '$newAttempts' WHERE username = '$username'";
            }

                mysqli_query($mysqli, $block);

                echo "<div class='error'>";
                echo "<img src='../assets/images/waning.png' style='width: 150px;'>";
                echo "<h2>ERROR!</h2>";
                echo "Username or password incorrect.<br> Please go back and try again.<br>";
                echo "<b>Attempt $newAttempts of 3.</b>";
                echo "</div>";
                exit();
                }
            }else{
                echo "<div class='error'>";
                echo "<img src='../assets/images/waning.png' style='width: 150px;'>";
                echo "<h2>ERROR!</h2>";
                echo "User not found.<br> Please go back and try again.<br>";
                echo "</div>";
                exit();
            }
        mysqli_close($mysqli);
        ?>
    </body>
</html>