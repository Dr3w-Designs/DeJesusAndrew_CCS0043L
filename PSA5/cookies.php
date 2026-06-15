<?php
    setcookie("fname", "Andrew", time() + 10); // Cookie expires in 10 seconds
    setcookie("mname", "Jacinto", time() + 20); // Cookie expires in 20 seconds
    setcookie("lname", "De Jesus", time() + 30); // Cookie expires in 30 seconds
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies - De Jesus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</head>
<body>
    <div class="page-shell">
        <div class="results-card">
            <h1>Stored Cookie Values</h1>
            <?php
                if (isset($_COOKIE["fname"])) {
                    echo "<p><span>First Name:</span> " . htmlspecialchars($_COOKIE["fname"]) . "</p>";
                }
                if (isset($_COOKIE["mname"])) {
                    echo "<p><span>Middle Name:</span> " . htmlspecialchars($_COOKIE["mname"]) . "</p>";
                }
                if (isset($_COOKIE["lname"])) {
                    echo "<p><span>Last Name:</span> " . htmlspecialchars($_COOKIE["lname"]) . "</p>";
                }
            ?>
        </div>
    </div>

    <footer class="site-footer">
        <p>For educational purposes only &copy; 2024 Andrew De Jesus</p>
    </footer>
    <footer class="site-footer">
        <p>For educational purposes only &copy; 2026 Andrew De Jesus</p>
    </footer>
</body>
</html>