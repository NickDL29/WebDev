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
    //Design a PHP script that takes user name and password as input and store it 
    //into cookies. Display the cookie information on the same page.
    $cname='admin';
    $name=$_POST['name'];
    $cpwd='abcxyz';
    $pwd=$_POST['pwd'];
    setcookie('cname',$name,time()+36000);
    setcookie('cpwd',$pwd,time()+36000);
    if(isset($_COOKIE['cname']))
    {
        echo "<br>Cookie is set and cokkie value is :".$_COOKIE['cname']."<br>";
    }
    else
    {
        echo "<br>Cookie is not set.";
    }
    if(isset($_COOKIE['cpwd']))
    {
        echo "<br>Cookie is set and cokkie value is : $cpwd<br>";
    }
    else
    {
        echo "<br>Cookie is not set.";
    }

    ?>
</body>
</html>