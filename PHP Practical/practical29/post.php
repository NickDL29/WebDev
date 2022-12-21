<?php
 if(isset($_POST)){
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'practicals';
 $con = new mysqli($host, $user,$pass, $db);
 $query = $_GET['query'];
 if(mysqli_query($con, $query)){
 echo "Run successfully";
 } else{
 echo "Run error - ".mysqli_error($con);
 }
 }
?>
