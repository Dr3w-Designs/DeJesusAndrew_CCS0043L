<?php
function clean_input($value)
{
    return trim((string) $value);
}

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}

$username = $_COOKIE["acta_remember_username"] ?? "";
$password = $_COOKIE["acta_remember_password"] ?? "";
$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = clean_input($_POST["username"] ?? "");
    $password = (string) ($_POST["password"] ?? "");
    $rememberMe = isset($_POST["remember_me"]);

    if ($rememberMe) {
        setcookie("acta_remember_username", $username, time() + (86400 * 30), "/");
        setcookie("acta_remember_password", $password, time() + (86400 * 30), "/");
        $message = "Username and password cookies were saved.";
        $messageType = "success";
    } else {
        setcookie("acta_remember_username", "", time() - 3600, "/");
        setcookie("acta_remember_password", "", time() - 3600, "/");
        $password = "";
        $message = "Remember Me is unchecked, so cookies were not saved.";
        $messageType = "success";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main class="login-page">
        <section class="login-card">
            <div class="top-bar">
                <div class="brand-mark">G</div>
                <button class="menu-button" type="button" aria-label="Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

            <?php if ($message): ?>
                <div class="message <?php echo e($messageType); ?>"><?php echo e($message); ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo e($username); ?>" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="<?php echo e($password); ?>" required>

                <div class="inline-row">
                    <label class="check-label" for="remember_me">Remember Me</label>
                    <input type="checkbox" id="remember_me" name="remember_me" <?php echo $password ? "checked" : ""; ?>>
                    <button type="submit" class="small-button">Submit</button>
                </div>
            </form>

            
            <a class="text-link" href="../Ex3/index_example3.php">Go to Example 3</a>
        </section>
    </main>
</body>
</html>
