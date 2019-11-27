<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/logout.css">
    <title>Loguit</title>
</head>
<body>
    <?php
        //require '../../php/inc/dbcreds.inc.php';
        require '../../php/inc/get_user.inc.php';
    ?>

    <section id="center">
        <div class="container">
            <h1>Tot ziens, <h1 id="capitalize"><?php echo $portal_user; ?></h1></h1>
           
        </div>
    </section>
</body>
</html>