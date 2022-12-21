<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <style>
        .slip{
            border: 10px double black;
            height:20vh;
            width:50%;
            padding: 5px;
            margin-top:100px;
        }
 
        h1{
            margin:0;
            margin-bottom:20px;
        }
 
        td{
            min-width: 100px;
        }
    </style>
</head>
<body>
    <form method="get" action="<?php $_SERVER['PHP_SELF']?>">
        <h3>Enter your employee code</h3>  
        <input type="number" name="code" value="0"/>
        <button type="submit">Enter</button>
    </form>
    <?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'practicals';
 
        $con = new mysqli($host, $user,$pass, $db);
        if(isset($_GET)){
            $query = 'select * from employee where code='.$_GET['code'];
            $result = mysqli_query($con, $query);
        }        
    ?>
    <div class='slip'>
        <h1>Salary slip</h1>
        <table>
            <?php
                while($arr = mysqli_fetch_array($result)){
                    echo"<tr>
                        <td>Employee name: </td>
                        <td>".$arr['name']."</td>
                    </tr>
                    <tr>
                        <td>Salary month: </td>
                        <td>".$arr['month']."</td>
                    </tr>
                    <tr>
                        <td>Salary year: </td>
                        <td>".$arr['year']."</td>
                    </tr>";
                };
            ?>
        </table>
    </div>
</body>
</html>


