<?php
    $pageTitle = 'Personal Information';
    $pageSubtitle = 'Student Resume';

    $personalInfo = array(
        'Full Name' => 'Andrew J. De Jesus',
        'Program' => 'BSIT - Web and Mobile Applications',
        'Email' => 'ajdejesus@fit.edu.ph',
        'Phone' => '+63-9420601432',
        'Location' => 'Sta. Maria, Bulacan, Philippines'
    );

    $summary = 'A motivated Information Technology student with hands-on experience in web development, programming, databases, and basic network troubleshooting. Skilled in HTML, CSS, JavaScript, Python, and SQL. Seeking an entry-level IT or web development role.';

    require_once __DIR__ . '/partials/header.php';
    include __DIR__ . '/partials/resume-nav.php';
?>

<section class="resume-section">
    <h2>Personal Information</h2>
    <div class="resume-grid">
        <?php foreach ($personalInfo as $label => $value) { ?>
            <div class="resume-field">
                <span class="resume-label"><?php echo $label; ?></span>
                <span class="resume-value"><?php echo $value; ?></span>
            </div>
        <?php } ?>
    </div>
</section>

<section class="resume-section">
    <h2>Profile Summary</h2>
    <p class="resume-text"><?php echo $summary; ?></p>
</section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>