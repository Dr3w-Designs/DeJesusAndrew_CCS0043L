<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["c1"] = $_POST["c1"];
    $_SESSION["c2"] = $_POST["c2"];
    $_SESSION["c3"] = $_POST["c3"];
    $_SESSION["c4"] = $_POST["c4"];
    $_SESSION["c5"] = $_POST["c5"];
}

function safe_color_value($value) {
    $value = trim((string) $value);

    if ($value === '') {
        return 'inherit';
    }

    if (preg_match('/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/', $value)) {
        return $value;
    }

    if (preg_match('/^[a-zA-Z]+$/', $value)) {
        return $value;
    }

    return 'inherit';
}

function display_value($value) {
    $value = trim((string) $value);
    return $value === '' ? 'No color entered' : htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Results - De Jesus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-shell">
        <div class="results-card">
            <h1>Your Favorite Colors</h1>

            <p style="color: <?php echo safe_color_value($_SESSION['c1'] ?? 'inherit'); ?>;">Color 1: <?php echo display_value($_SESSION['c1'] ?? ''); ?></p>
            <p style="color: <?php echo safe_color_value($_SESSION['c2'] ?? 'inherit'); ?>;">Color 2: <?php echo display_value($_SESSION['c2'] ?? ''); ?></p>
            <p style="color: <?php echo safe_color_value($_SESSION['c3'] ?? 'inherit'); ?>;">Color 3: <?php echo display_value($_SESSION['c3'] ?? ''); ?></p>
            <p style="color: <?php echo safe_color_value($_SESSION['c4'] ?? 'inherit'); ?>;">Color 4: <?php echo display_value($_SESSION['c4'] ?? ''); ?></p>
            <p style="color: <?php echo safe_color_value($_SESSION['c5'] ?? 'inherit'); ?>;">Color 5: <?php echo display_value($_SESSION['c5'] ?? ''); ?></p>
        </div>
    </div>

<footer class="site-footer">
        <p>For educational purposes only &copy; 2026 Andrew De Jesus</p>
</footer>
</body>
</html>