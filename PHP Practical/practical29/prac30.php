<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Resume form</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .img {
            position: absolute;
            top: 0;
            right: 20px;
            background-color: #999;
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .resume {
            width: 50vw;
            border: 5px double black;
            min-height: 80vh;
            margin: 0 auto;
            margin-top: 20px;
            padding: 20px;
            padding-top: 0;
            display: flex;
            flex-direction: column;
            gap: 5px;
            position: relative;
        }

        @media (max-width:1024px) {
            .resume {
                width: 80vw;
            }
        }

        h1 {
            margin: 0;
        }

        .position {
            font-size: 18px;
            text-decoration: underline;
        }

        a {
            display: block;
        }

        .address {
            max-width: 25%;
        }

        div,
        h2 {
            margin-top: 20px;
        }

        li {
            margin-left: 20px;
        }

        .query {
            min-width: 100vw;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET)) {
        $data = $_POST;
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'practicals';
        $con = new mysqli($host, $user, $pass, $db);
        $query = "SELECT * from resume WHERE first_name =\"" . $_GET['first_name'] . "\" AND last_name = \"" . $_GET['last_name'] . "\"";
        $result = mysqli_query($con, $query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $position = $row['position'];
                $phone = $row['phone'];
                $github = $row['github'];
                $dob = $row['dob'];
                $address = $row['address'];
                $description = $row['description'];
            }
        } else {
            echo "Fetch error - " . mysqli_error($con);
        }
    }
    ?>
    <div class="resume">
        <h2>Resume</h2>
        <div class="img"></div>
        <h1 class="name"><span class="firstname">
            <?php echo $first_name; ?></span> <span class="lastname">
            <?php echo  $last_name; ?></span> <span class="position">
            <?php echo   $position; ?></span></h1>
        <a class="phone" href="tel:909876552">+
            <?php echo $phone; ?></a>
        <a class="git" href="github"><?php echo $github; ?></a>
        <div class="address"><?php echo $address; ?></div>
        <div class="description"><?php echo $description; ?></div>
        <h2>Skills</h2>
        <ul>
            <li>Skill 1</li>
            <li>Skill 2</li>
            <li>Skill 3</li>
        </ul>
        <h2>Hobbies</h2>
        <ul>
            <li>Hobby 1</li>
            <li>Hobby 2</li>
        </ul>
        <h2>Languages</h2>
        <ul>
            <li>Primary Language</li>
            <li>Secondary Language</li>
        </ul>
    </div>
    </div>
    <div>
        <h1>Enter Query</h1>
        <form method="query.php" action="post">
            <input type="text" name="query" class="query" />
            <button type="submit">Update/Delete</button>
        </form>
        <div>
</body>

</html