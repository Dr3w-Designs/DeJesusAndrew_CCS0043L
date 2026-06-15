<?php
require __DIR__ . '/partials/story-data.php';
$pageTitle = 'Short Stories';
include __DIR__ . '/partials/header.php';
?>

<main class="story-gallery">
    <section class="hero">
        <div class="hero__text">
            <p class="hero__kicker">Five short stories</p>
            <h1>Story Shelf</h1>
            <p class="hero__lead">
                Choose a panel to read. Each story is a quick journey with its own image and mood.
            </p>
        </div>
        <div class="hero__accent" aria-hidden="true"></div>
    </section>

    <section class="story-grid story-grid--full">
        <?php foreach ($stories as $story): ?>
            <article class="story-panel" id="<?= escape($story['slug']); ?>">
                <header class="story-panel__header">
                    <p class="story-panel__kicker">Story <?= escape((string) $story['number']); ?></p>
                    <h2><?= escape($story['title']); ?></h2>
                    <p class="story-panel__subtitle"><?= escape($story['subtitle']); ?></p>
                </header>
                <figure class="story-panel__image">
                    <img
                        src="<?= escape($story['image']); ?>"
                        alt="<?= escape($story['imageAlt']); ?>"
                    >
                    <figcaption><?= escape($story['imageCaption']); ?></figcaption>
                </figure>
                <div class="story-panel__content">
                    <?php foreach ($story['content'] as $paragraph): ?>
                        <p><?= escape($paragraph); ?></p>
                    <?php endforeach; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</main>



<?php include __DIR__ . '/partials/footer.php'; ?>