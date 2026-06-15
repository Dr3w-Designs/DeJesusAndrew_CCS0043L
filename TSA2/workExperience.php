<?php
    $pageTitle = 'Work Experience';
    $pageSubtitle = 'Student Resume';

    $experience = array(
        array(
            'title' => 'ChemCarnate - Web App Project',
            'summary' => 'A chemistry learning web app with interactive quizzes.'
        ),
        array(
            'title' => 'Enduro Lab - Workflow Tracker',
            'summary' => 'A laboratory workflow tracker for experiments and scheduling.'
        ),
        array(
            'title' => 'Swift Stack - Productivity Platform',
            'summary' => 'A productivity platform for tasks, notes, and deadlines.'
        )
    );

    require_once __DIR__ . '/partials/header.php';
    include __DIR__ . '/partials/resume-nav.php';
?>

<section class="resume-section">
    <h2>Work Experience</h2>
    <p class="resume-text">Project-based experience while studying. Replace these with formal work experience if available.</p>
    <?php foreach ($experience as $entry) { ?>
        <div class="resume-entry">
            <h3><?php echo $entry['title']; ?></h3>
            <p class="resume-text"><?php echo $entry['summary']; ?></p>
        </div>
    <?php } ?>
</section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
