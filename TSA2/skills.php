<?php
    $pageTitle = 'Skills';
    $pageSubtitle = 'Student Resume';

    $skills = array(
        'HTML, CSS, JavaScript',
        'Python, Java',
        'SQL and Databases',
        'Responsive Design',
        'Basic Networking',
        'Git and GitHub',
        'Problem Solving',
        'Communication',
        'Teamwork',
        'Adaptability',
        'Time Management'
    );

    require_once __DIR__ . '/partials/header.php';
    include __DIR__ . '/partials/resume-nav.php';
?>

<section class="resume-section">
    <h2>Skills</h2>
    <ul class="resume-list">
        <?php foreach ($skills as $skill) { ?>
            <li><?php echo $skill; ?></li>
        <?php } ?>
    </ul>
</section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
