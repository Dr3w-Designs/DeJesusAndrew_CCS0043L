<?php
session_start();

if (isset($_SESSION["actb_user_id"])) {
    header("Location: home.php");
    exit;
}

require_once "db.php";
require_once "helper.php";

$username = "";
$password = "";
$message = $_SESSION["actb_login_message"] ?? "";
$messageType = $_SESSION["actb_login_message_type"] ?? "";

unset($_SESSION["actb_login_message"], $_SESSION["actb_login_message_type"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = clean_input($_POST["username"] ?? "");
    $password = (string) ($_POST["password"] ?? "");
    $user = get_user_by_username($conn, $username);

    if ($user && password_is_valid($password, $user)) {
        $_SESSION["actb_user_id"] = (int) $user["id"];
        $_SESSION["actb_username"] = $user["username"];

        header("Location: home.php");
        exit;
    }

    $message = "Invalid username or password.";
    $messageType = "error";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity B - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="activity-page">
       

        <section class="login-box">
            <h1>Log-In Form</h1>

            <?php if ($message): ?>
                <div class="message <?php echo e($messageType); ?>"><?php echo e($message); ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo e($username); ?>" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>

          
            <a class="plain-link" href="index.php">Register New User</a>
        </section>
    </main>
</body>
</html>
