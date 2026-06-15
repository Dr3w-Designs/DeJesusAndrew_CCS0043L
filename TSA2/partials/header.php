<?php
    if (!isset($pageTitle)) {
        $pageTitle = 'Student Resume';
    }

    if (!isset($pageSubtitle)) {
        $pageSubtitle = 'Web-based Resume';
    }

    $photoUrl = 'images/photo.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?> - De Jesus Andrew</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container resume-container">
        <div class="resume-frame">
            <header class="resume-header">
                <div class="resume-avatar-wrap">
                    <img class="resume-photo" src="<?php echo htmlspecialchars($photoUrl, ENT_QUOTES, 'UTF-8'); ?>" alt="Student photo">
                </div>
                <div class="resume-header__info">
                    <h1><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
                    <p><?php echo htmlspecialchars($pageSubtitle, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            </header>
