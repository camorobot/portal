<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "Welcome, " . $_SESSION['username'] . "!";
        } else {
            header('location: ../');
        }
    ?>
    <p>hoi</p>
    <a href="../../assets/php/logout.php">logout</a>
</body>
</html>