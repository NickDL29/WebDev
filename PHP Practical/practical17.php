<?php
 echo "Welcome ".$_POST["Username"];
 if(!strstr($_POST["E-mail"],"@scet.ac.in"))
 {
    echo '<script> alert("Must have valid E-mail address") </script>';
 }
 else{
    echo "<br> <br> Your E-mail address is:" .$_POST["E-mail"];
 }
?>
