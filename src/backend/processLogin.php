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

        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($mysqli, $sql);
        $line = mysqli_fetch_array($result);

        if ($line) {

            $updateAccess = "UPDATE users SET acess = acess + 1 WHERE username = '$username'";
            mysqli_query($mysqli, $updateAccess);
            // Fazer verificação se o usuário está bloqueado
            // Bloquear aceeso se o usuário digitar a senha errada por 3x consecutivas
            $_SESSION['username'] = $line['username'];
            $_SESSION['name'] = $line['name'];
            $_SESSION['status'] = $line['status'];
            $_SESSION['type'] = $line['type'];
            $_SESSION['password'] = $line['password'];
            $_SESSION['access'] = $line['acess'] + 1;

            if($_SESSION['access'] == 1){
                header("Location: ../pages/formPass.php");
            }else{
                header("Location: ../pages/home.php");
            }
            // criar uma variavel de que, se for o primeiro acesso do usuário, manda-lo para tela de alterar a senha.
            //mostrar na tela de usuário quantos acessos tiveram na conta dele.
        } else {
            echo "ERROR!<br>";
            echo "Username or password incorrect.<br> Please go back and try again.";
            exit();
        }

        mysqli_close($mysqli);
        ?>
    </body>
</html>