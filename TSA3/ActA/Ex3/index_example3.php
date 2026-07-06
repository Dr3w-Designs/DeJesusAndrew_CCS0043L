<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location: home.php");
    exit;
}

function clean_input($value)
{
    return trim((string) $value);
}

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}

$staticUsername = "user123";
$staticPassword = "12345";

$username = $_COOKIE["acta_session_username"] ?? "";
$password = $_COOKIE["acta_session_password"] ?? "";
$message = "";
$messageType = "";

if (isset($_GET["logout"])) {
    $message = "You have logged out.";
    $messageType = "success";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = clean_input($_POST["username"] ?? "");
    $password = (string) ($_POST["password"] ?? "");
    $rememberMe = isset($_POST["remember_me"]);
    $matchesStaticLogin = $username === $staticUsername && $password === $staticPassword;

    if ($matchesStaticLogin) {
        $_SESSION["username"] = $username;

        if ($rememberMe) {
            setcookie("acta_session_username", $username, time() + (86400 * 30), "/");
            setcookie("acta_session_password", $password, time() + (86400 * 30), "/");
        } else {
            setcookie("acta_session_username", "", time() - 3600, "/");
            setcookie("acta_session_password", "", time() - 3600, "/");
        }

        header("Location: home.php");
        exit;
    }

    $message = "Username and password did not match.";
    $messageType = "error";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 3 - Session Login</title>
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

           
        </section>
    </main>
</body>
</html>
