<?php
    session_start();
    require 'inc/dbcreds.php';
    
    //$portal_user = $_POST('username');
    $result = mysqli_query($dbconnect, "select * from users where username = '$username' and password = '$password'") 
        or die("Failed to query database ".mysqli_error($dbconnect));
    $row = mysqli_fetch_array($result);

    if ($row['username'] == $username && !empty($username) && $row['password'] && !empty($password) == $password){
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        echo "Loggin success. Welcome " .$row['username'];
        header('location: /login-success/');
    } else {
        echo '<script language="javascript" type="text/javascript">alert("Username en wachtwoord onjuist.");document.location.href="/"</script>';
    }
    
?>
