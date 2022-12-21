<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initialscale=1.0" />
    <title>Resume Form</title>
    <style>
        input,
        textarea {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <form method="post" action="insert.php">
        <label for="first_name">First name</label>
        <input type="text" name="first_name" required />
        <label for="last_name">Last name</label>
        <input type="text" name="last_name" required />
        <label for="position">Position</label>
        <input type="text" name="position" required />
        <label for="phone">Phone number</label>
        <input type="number" name="phone" required />
        <label for="github">Github link</label>
        <input type="text" name="github" required />
        <label for="dob">DOB</label>
        <input type="date" name="dob" required />
        <label for="address">Address</label>
        <textarea type="text" name="address" required></textarea>
        <label for="description">Description</label>
        <textarea type="text" name="description" required></textarea>
        <button type="submit">Submit</button>
    </form>
    <form method="get" action="prac30.php">
        <h3>View your resume</h3>
        <label for="first_name">First name</label>
        <input type="text" name="first_name" required />
        <label for="last_name">Last name</label>
        <input type="text" name="last_name" required />
        <button type="submit">View</button>
    </form>
</body>

</html>