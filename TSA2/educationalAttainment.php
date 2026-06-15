<?php
    $pageTitle = 'Educational Attainment';
    $pageSubtitle = 'Student Resume';

    $education = array(
        array(
            'program' => 'Bachelor of Science in Information Technology - Web and Mobile Applications',
            'school' => 'Far Eastern University: Institute of Technology',
            'years' => 'Aug 2024 - Present',
            'highlights' => array(
                'Built responsive websites using HTML, CSS, and JavaScript.',
                'Designed and managed databases using SQL.',
                'Developed applications using Python and Java.'
            )
        )
    );

    require_once __DIR__ . '/partials/header.php';
    include __DIR__ . '/partials/resume-nav.php';
?>

<section class="resume-section">
    <h2>Education</h2>
    <?php foreach ($education as $entry) { ?>
        <div class="resume-entry">
            <h3><?php echo $entry['program']; ?></h3>
            <div class="resume-meta"><?php echo $entry['school']; ?> | <?php echo $entry['years']; ?></div>
            <ul class="resume-list">
                <?php foreach ($entry['highlights'] as $item) { ?>
                    <li><?php echo $item; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
