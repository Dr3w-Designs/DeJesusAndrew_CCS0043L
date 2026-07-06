<?php
require_once "authorize.php";
require_once "db.php";
require_once "helper.php";

$user = get_user_by_id($conn, (int) $_SESSION["actb_user_id"]);

if (!$user) {
    header("Location: logout.php");
    exit;
}

$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $currentPassword = (string) ($_POST["current_password"] ?? "");
    $newPassword = (string) ($_POST["new_password"] ?? "");
    $repeatPassword = (string) ($_POST["repeat_password"] ?? "");

    if (!password_is_valid($currentPassword, $user)) {
        $message = "Current password is not the same with the old password.";
        $messageType = "error";
    } elseif ($newPassword !== $repeatPassword) {
        $message = "New password and Re-Enter new password should be the same.";
        $messageType = "error";
    } elseif (update_user_password($conn, (int) $user["id"], $newPassword)) {
        $message = "Password reset successfully.";
        $messageType = "success";
        $user = get_user_by_id($conn, (int) $_SESSION["actb_user_id"]);
    } else {
        $message = "Password was not reset. Please try again.";
        $messageType = "error";
    }
}

$fullName = $user["first_name"] . " " . $user["middle_name"] . " " . $user["last_name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity B - User Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="activity-page">
       
        <section class="info-box">
            <div class="info-header">
                <h1>User Information Form</h1>
                <a href="logout.php">Log-out</a>
            </div>

            <?php if ($message): ?>
                <div class="message <?php echo e($messageType); ?>"><?php echo e($message); ?></div>
            <?php endif; ?>

            <div class="user-details">
                <p><strong>Welcome</strong> <?php echo e($fullName); ?></p>
                <p><strong>Birthday:</strong> <?php echo e($user["birthday"]); ?></p>
                <p><strong>Contact Details:</strong></p>
                <p class="indent"><strong>Email:</strong> <?php echo e($user["email"]); ?></p>
                <p class="indent"><strong>Contact:</strong> <?php echo e($user["contact_number"]); ?></p>
            </div>

            <hr>

            <form method="POST" action="" class="reset-form">
                <h2>RESET PASSWORD</h2>

                <div class="form-row">
                    <label for="current_password">Enter Current Password:</label>
                    <input type="password" id="current_password" name="current_password" required>
                </div>

                <div class="form-row">
                    <label for="new_password">Enter New Password:</label>
                    <input type="password" id="new_password" name="new_password" required>
                </div>

                <div class="form-row">
                    <label for="repeat_password">Re-Enter New Password:</label>
                    <input type="password" id="repeat_password" name="repeat_password" required>
                </div>

                <button type="submit">Reset Password</button>
            </form>

           
        </section>

       
    </main>
</body>
</html>
