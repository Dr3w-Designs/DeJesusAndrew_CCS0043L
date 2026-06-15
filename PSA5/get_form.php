<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Form - De Jesus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-shell">
        <form method="get" action="" class="form-card">
            <h1>Student Information (GET) </h1>
            <p class="subtitle">Enter your details below and submit the form.</p>

            <label>
                First Name
                <input type="text" name="fname">
            </label>

            <label>
                Middle Name
                <input type="text" name="mname">
            </label>

            <label>
                Last Name
                <input type="text" name="lname">
            </label>

            <label>
                Birthdate
                <input type="date" name="bdate">
            </label>

            <label>
                Address
                <input type="text" name="addr">
            </label>

            <input type="submit" value="Submit">
        </form>

        <div class="results-card">
            <?php
                if (isset($_GET['fname'], $_GET['mname'], $_GET['lname'], $_GET['bdate'], $_GET['addr'])) {
                    echo "<h2>Submitted Details</h2>";
                    echo "<p><span>First Name:</span> " . $_GET['fname'] . "</p>";
                    echo "<p><span>Middle Name:</span> " . $_GET['mname'] . "</p>";
                    echo "<p><span>Last Name:</span> " . $_GET['lname'] . "</p>";
                    echo "<p><span>Birthdate (YYYY-MM-DD):</span> " . $_GET['bdate'] . "</p>";
                    echo "<p><span>Address:</span> " . $_GET['addr'] . "</p>";
                }
            ?>
        </div>
    </div>

    <footer class="site-footer">
        <p>For educational purposes only &copy; 2026 Andrew De Jesus</p>
    </footer>

</body>
</html>