<?php
require_once __DIR__ . "/authorize.php";

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main class="dashboard-page">
        <section class="dashboard-shell">
            <header class="dashboard-header">
                <div>
                    <p class="eyebrow">Example 3</p>
                    <h1>Homepage</h1>
                </div>
                <a class="logout-button" href="logout.php">Logout</a>
            </header>

            <div class="welcome-panel">
                <h2>Welcome, <?php echo e($_SESSION["username"]); ?></h2>
                <p>Full Name: Sample Login User</p>
                <p>Username: <?php echo e($_SESSION["username"]); ?></p>
            </div>

            <nav class="dashboard-links">
                <a href="profile.php">Profile Page</a>
                <a href="account.php">Account Page</a>
            </nav>
        </section>
    </main>
</body>
</html>
