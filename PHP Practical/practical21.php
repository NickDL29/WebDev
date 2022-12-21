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
    //Write a PHP script to display the content of the file and display the total 
    //number of lines,words and characters.
    $file=fopen('text.txt','a+');
    $size=filesize('text.txt');
    $words=str_word_count('text.txt');
    $data=fread($file,$size);
    $line=count(file('text.txt'));
    echo "Data in file is : <br><br>$data<br><br>";
    echo "The number of lines in file is : $line.<br>";
    echo "The number of words in file is : $words.<br>";
    echo "The number of characters in file is : $size.<br>";
    fclose($file);
    ?>
</body>
</html>