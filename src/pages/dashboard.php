<?php
include '../backend/connection.php';
session_start();

$sql = "SELECT name, username, type, status FROM users";
$result = mysqli_query($mysqli, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/icon.png" type="image/png">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link rel="stylesheet" href="../styles/media-query.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Usuários</title>
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
        <div class="table-wrapper">
            <div class="border-form table"></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($line = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($line['name']) . "</td>";
                            echo "<td>" . htmlspecialchars($line['username']) . "</td>";

                            echo "<td>";
                            if ($line['type'] == 0) {
                                echo "Admin";
                            } else {
                                echo "User";
                            }
                            echo "</td>";

                            echo "<td>";
                            if ($line['status'] == 0) {
                                echo "Inactive";
                            } else if ($line['status'] == 1) {
                                echo "Active";
                            } else {
                                echo "Blocked";
                            }
                            echo "</td>";
                            echo "<td>";
                                echo "<a href=\"../pages/formUser.php?username=" .$line["username"]. "\"><i class=\"bi bi-pencil-square\"></i></a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>Nenhum usuário encontrado.</td></tr>";
                    }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>