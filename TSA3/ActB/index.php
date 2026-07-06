<?php
session_start();

if (isset($_SESSION["actb_user_id"])) {
    header("Location: home.php");
    exit;
}

require_once "database.php";
require_once "helpers.php";

$values = [
    "first_name" => "",
    "middle_name" => "",
    "last_name" => "",
    "username" => "",
    "password" => "",
    "confirm_password" => "",
    "birthday" => "",
    "email" => "",
    "contact_number" => "",
];

$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($values as $key => $value) {
        $values[$key] = clean_input($_POST[$key] ?? "");
    }

    if ($values["password"] !== $values["confirm_password"]) {
        $message = "Password and confirm password are not the same.";
        $messageType = "error";
    } elseif (username_or_email_exists($conn, $values["username"], $values["email"])) {
        $message = "Username or email already exists.";
        $messageType = "error";
    } elseif (create_user($conn, $values)) {
        $_SESSION["actb_login_message"] = "Registration saved to the database. You can now login using your username and password.";
        $_SESSION["actb_login_message_type"] = "success";

        header("Location: login.php");
        exit;
    } else {
        $message = "Registration was not saved. Please try again.";
        $messageType = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Information</title>
    <link rel="stylesheet" href="style.css?v=2">
</head>
<body>
    <main class="page-wrap">
        <section class="form-card compact-card">
            <h1>My Personal Information</h1>

            <?php if ($message): ?>
                <div class="message <?php echo e($messageType); ?>"><?php echo e($message); ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="<?php echo e($values["first_name"]); ?>" required>

                <label for="middle_name">Middle Name</label>
                <input type="text" id="middle_name" name="middle_name" value="<?php echo e($values["middle_name"]); ?>" required>

                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="<?php echo e($values["last_name"]); ?>" required>

                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo e($values["username"]); ?>" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <label for="birthday">Birthday</label>
                <input type="text" id="birthday" name="birthday" value="<?php echo e($values["birthday"]); ?>" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo e($values["email"]); ?>" required>

                <label for="contact_number">Contact Number</label>
                <input type="text" id="contact_number" name="contact_number" value="<?php echo e($values["contact_number"]); ?>" required>

                <button type="submit">Submit</button>
            </form>

        </section>
    </main>
</body>
</html>