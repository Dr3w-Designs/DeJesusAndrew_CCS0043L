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
    <title>Account Page</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main class="dashboard-page">
        <section class="dashboard-shell">
            <header class="dashboard-header">
                <div>
                    <p class="eyebrow">Protected Page</p>
                    <h1>Account</h1>
                </div>
                <a class="logout-button" href="logout.php">Logout</a>
            </header>

            <div class="welcome-panel">
                <p><strong>Login Username:</strong> <?php echo e($_SESSION["username"]); ?></p>
                <p><strong>Session Access:</strong> Allowed</p>
            </div>

            <nav class="dashboard-links">
                <a href="home.php">Homepage</a>
                <a href="profile.php">Profile Page</a>
            </nav>
        </section>
    </main>
</body>
</html>
