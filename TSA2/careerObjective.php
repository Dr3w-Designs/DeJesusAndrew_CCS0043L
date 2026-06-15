<?php
    $pageTitle = 'Career Objective';
    $pageSubtitle = 'Student Resume';
    $objective = 'A motivated Information Technology student with hands-on experience in web development, programming, databases, and basic network troubleshooting. Skilled in HTML, CSS, JavaScript, Python, and SQL. Seeking an entry-level IT or web development role.';

    require_once __DIR__ . '/partials/header.php';
    include __DIR__ . '/partials/resume-nav.php';
?>

<section class="resume-section">
    <h2>Objective</h2>
    <p class="resume-text"><?php echo $objective; ?></p>
</section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
