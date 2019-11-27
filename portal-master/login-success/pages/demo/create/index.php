<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/login-success/assets/css/demo-create.css">
    <title>Document</title>
</head>
<body>
    <?php require '../../../../assets/php/inc/header.inc.php'; ?>
    <form action="/login-success/assets/php/demo-create.php" method="POST">
        <input type="text" placeholder="website name" name="website-name"></input>
        <input type="text" placeholder="gebruikersnaam" name="username"></input>
        <input type="password" placeholder="wachtwoord" name="password"></input>
        <Button type="submit">submit</Button>
    </form>
</body>
</html>