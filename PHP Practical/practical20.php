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
    //Design webpage to detect the visitor’s browser name and its version.
    $b=$_SERVER['HTTP_USER_AGENT'];
    echo "Broswer name and its version is : <br>$b";
    ?>
</body>
</html>