<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/icon.png" type="image/png">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/index.css">
    <title>Login</title>
</head>
<body>
    <div class="fundo">
        <div class="content">
            <img src="assets/images/logo.png" alt="logo" class="logo">
            <div class="border-form"></div>
                <div class="form">
                    <form action="backend/processLogin.php" method="post">
                        <div class="info-user">
                            <div class="user">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="user" required>
                            </div>
                            <div class="pass">
                                <label for="pass">Password</label>
                                <input type="password" name="pass" id="pass" required>
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="reset" value="Reset" id="reset">
                            <input type="submit" value="Enter" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>