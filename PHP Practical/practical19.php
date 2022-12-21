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
    //Prepare a PHP Code to read and write content from File.
    $file=fopen('text.txt','a+');
    $size=filesize($file);
    $data=fread($file,$size);
    echo "Data in file is : <br>$data<br>";

    fwrite($file, "<br>Thank you for wishing me.");
    fclose($file);
    ?><?php
    $file_handle = fopen('tmp.txt', 'a+');
    fwrite($file_handle, 'Tuts+ is a great online resource to learn skills you want!');
    fwrite($file_handle, "\n");
    fwrite($file_handle, 'Visit tutsplus.com to know more!');
    fclose($file_handle);
     
    $file_handle = fopen('tmp.txt', 'r');
    $contents = fread($file_handle, filesize('tmp.txt'));
    fclose($file_handle);
     
    echo $contents;
    ?>
</body>
</html>