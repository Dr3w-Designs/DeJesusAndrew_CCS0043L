<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
        First Name: <input type="text" name="fname"><br>
        Middle Name: <input type="text" name="mname"><br>
        Last Name: <input type="text" name="lname"><br>
        Birthdate: <input type="date" name="bdate"><br>
        Address: <input type="text" name="addr"><br>
        <input type="submit">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $fname = $_GET['fname'];
            $mname = $_GET['mname'];
            $lname = $_GET['lname'];
            $bdate = $_GET['bdate'];
            $addr = $_GET['addr'];  

            echo "First Name: " . $fname . "<br>";
            echo "Middle Name: " . $mname . "<br>";
            echo "Last Name: " . $lname . "<br>";
            echo "Birthdate: " . $bdate . "<br>";
            echo "Address: " . $addr . "<br>";
        }
</body>
</html>