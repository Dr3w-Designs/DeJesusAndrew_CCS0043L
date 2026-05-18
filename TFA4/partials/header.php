<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Short Stories';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= escape($pageTitle); ?> - De Jesus</title>
    <link rel="stylesheet" href="shortStoriesStyle.css">
</head>
<body>
    <header class="site-header">
        <nav class="site-nav">
            <a class="site-nav__brand" href="shortStories.php">Story Shelf</a>
            <div class="site-nav__links">
                <?php foreach ($stories as $navStory): ?>
                    <a href="shortStories.php#<?= escape($navStory['slug']); ?>"><?= escape($navStory['navLabel']); ?></a>
                <?php endforeach; ?>
            </div>
        </nav>
    </header>
