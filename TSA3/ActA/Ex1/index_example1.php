<?php
session_start();

function clean_input($value)
{
    return trim((string) $value);
}

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}

$blankValues = [
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

$values = $blankValues;
$message = $_SESSION["example1_message"] ?? "";
$messageType = $_SESSION["example1_message_type"] ?? "";
$result = $_SESSION["example1_result"] ?? null;

unset($_SESSION["example1_message"], $_SESSION["example1_message_type"], $_SESSION["example1_result"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($values as $key => $value) {
        $values[$key] = clean_input($_POST[$key] ?? "");
    }

    if ($values["password"] !== $values["confirm_password"]) {
        $message = "Password and confirm password are not the same.";
        $messageType = "error";
    } else {
        $_SESSION["example1_message"] = "Submitted successfully.";
        $_SESSION["example1_message_type"] = "success";
        $_SESSION["example1_result"] = $values;

        header("Location: index_example1.php");
        exit;
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
                <input type="password" id="password" name="password" value="<?php echo e($values["password"]); ?>" required>

                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" value="<?php echo e($values["confirm_password"]); ?>" required>

                <label for="birthday">Birthday</label>
                <input type="text" id="birthday" name="birthday" value="<?php echo e($values["birthday"]); ?>" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo e($values["email"]); ?>" required>

                <label for="contact_number">Contact Number</label>
                <input type="text" id="contact_number" name="contact_number" value="<?php echo e($values["contact_number"]); ?>" required>

                <button type="submit">Submit</button>
            </form>

            <?php if ($result): ?>
                <div class="result-box">
                    <p><strong>Full Name:</strong> <?php echo e($result["first_name"] . " " . $result["middle_name"] . " " . $result["last_name"]); ?></p>
                    <p><strong>Username:</strong> <?php echo e($result["username"]); ?></p>
                    <p><strong>Password:</strong> <?php echo e($result["password"]); ?></p>
                    <p><strong>Birthday:</strong> <?php echo e($result["birthday"]); ?></p>
                    <p><strong>Email:</strong> <?php echo e($result["email"]); ?></p>
                    <p><strong>Contact Number:</strong> <?php echo e($result["contact_number"]); ?></p>
                    <a class="text-link" href="../Ex2/index_example2.php">Go to Example 2</a>
                </div>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
