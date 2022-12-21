<?php
    $name=$_POST['name'];
    $email=$_POST['email']; 
    if(isset($_POST['submit'])){
        if(!empty($_POST['gender'])) {
            $gender=$_POST['gender'];
        } else {
            $gender='Please select the value.';
        }
    }
    $hobbies=array();
    if(isset($_POST['submit'])){
        if(!empty($_POST['hobby'])) {
            foreach($_POST['hobby'] as $value){
            array_push($hobbies,$value);
            }
        }
        else{
            array_push($hobbies,'Please select value.');
        }
    }
    if(isset($_POST['submit'])){
        if(!empty($_POST['city'])){
            $city=$_POST['city'];
        }
    }
    echo "Name is : $name<br><br>";
    echo "Email ID is : $email<br><br>";
    echo "Gender is : $gender<br><br>";
    echo "Hobbies are : <br><br>";
    foreach($hobbies as $value)
    {
        echo "$value<br>";
    }
    echo "<br>City is $city<br>"
?>