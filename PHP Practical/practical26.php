<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if ($_POST['name']=='Admin' && $_POST['pwd'] == 'admin1234')
    {
        $_SESSION['valid']=true;
        $_SESSION['timeout']=time();
        $_SESSION['name']='admin';
            echo "You have entered correct details.";
        header('location:https://www.google.com/');
    }
    else
    {
        echo "<br> Wrong username and password";
    }
    ?>
</body>
</html>