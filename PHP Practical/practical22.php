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
    //Write a PHP Program to read one file and make a copy itself without copy 
    //function.
    $f1=fopen('text.txt','r');
    $f2=fopen('text2.txt','a+');
    $size1=filesize('text.txt');
    $data1=fread($f1,$size1);
    fwrite($f2,$data1);
    $size2=filesize('text2.txt');
    fwrite($f2,$data1);
    fclose($f1);
    fclose($f2);
    echo "File copied successfully."
    ?>
</body>
</html>