<?php
if (isset($_POST)) {
    $data = $_POST;
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'practicals';
    $con = new mysqli($host, $user, $pass, $db);
    $query = "insert into resume (first_name, last_name, position, phone, github, dob, address, description) values(\"" . $data['first_name'] . "\",\"" . $data['last_name'] . "\",\"" . $data['position'] . "\",". $data['phone'] . ",\"" . $data['github'] . "\",\"" . $data['dob'] . "\",\"" . $data['address']. "\",\"" . $data['description'] . "\")";
    
    if (mysqli_query($con, $query)) {
        echo "Inserted successfully";
    } else {
        echo "Insertion error - " . mysqli_error($con);
    }
}
?>