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
 
    $name=$_POST['name'];
    $pwd=$_POST['pwd'];
    $email=$_POST['email'];
    $enroll=$_POST['enroll'];
    if(isset($_POST['submit'])){
        if(!empty($_POST['year'])){
            $year=$_POST['year'];
        }
    }
    if(isset($_POST['submit'])){
        if(!empty($_POST['sem'])){
            $sem=$_POST['sem'];
        }
    }
    if(isset($_POST['submit'])){
        if(!empty($_POST['branch'])){
            $branch=$_POST['branch'];
        }
    }
    if(isset($_POST['submit'])){
        if(!empty($_POST['yod'])){
            $yod=$_POST['yod'];
        }
    }
    echo "Name : $name<br>";
    echo "Password : $pwd<br>";
    echo "Email ID : $email<br>";
    echo "Enrollment Number : $enroll<br>";
    echo "Year : $year<br>";
    echo "Semester : $sem<br>";
    echo "Branch : $branch<br>";
    echo "Academic Year : $yod<br>";
    ?>
</body>
</html>