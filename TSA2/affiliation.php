<?php
    $pageTitle = 'Affiliation';
    $pageSubtitle = 'Student Resume';

    $affiliations = array(
        'FEU Tech AITS - Member (2024 - Present)',
        'FIT Tamaraws Esports Club - Member (2024 - Present)',
    );

    require_once __DIR__ . '/partials/header.php';
    include __DIR__ . '/partials/resume-nav.php';
?>

<section class="resume-section">
    <h2>Affiliations</h2>
    <ul class="resume-list">
        <?php foreach ($affiliations as $affiliation) { ?>
            <li><?php echo $affiliation; ?></li>
        <?php } ?>
    </ul>
</section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
