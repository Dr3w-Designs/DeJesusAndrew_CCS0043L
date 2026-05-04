<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De Jesus - Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Simple, minimal template data: arrays keep repeated items concise
    $name = 'Andrew J. De Jesus';
    $title = 'IT Specialist - Web and Mobile Applications';
    $email = 'ajdejesus@fit.edu.ph';
    $phone = '+63-9420600001';
    $location = 'Sta. Maria, Bulacan, Philippines';

    // Use a single, predictable photo filename for simplicity
    $photo = file_exists(__DIR__ . '/photo.jpg') ? 'photo.jpg' : '';

    $summary = 'A motivated Information Technology student with hands-on experience in web development, programming, databases, and basic network troubleshooting. Skilled in HTML, CSS, JavaScript, Python, and SQL. Seeking an entry-level IT or web development role.';

    $education = [
        ['title' => 'Bachelor of Science in Information Technology - Web and Mobile Applications', 'school' => 'Far Eastern University: Institute of Technology', 'date' => 'Aug 2024 - Present', 'bullets' => [
            'Built responsive websites using HTML, CSS, and JavaScript.',
            'Designed and managed databases using SQL.',
            'Developed applications using Python and Java.'
        ]]
    ];

    $projects = [
        ['title' => 'ChemCarnate', 'bullets' => ['A chemistry learning web app with interactive quizzes.']],
        ['title' => 'Enduro Lab', 'bullets' => ['A laboratory workflow tracker for experiments and scheduling.']],
        ['title' => 'Swift Stack', 'bullets' => ['A productivity platform for tasks, notes, and deadlines.']]
    ];

    $skills = [
        'HTML, CSS, JavaScript',
        'Python, Java',
        'SQL & Databases',
        'Responsive Design',
        'Basic Networking',
        'Git & GitHub'
    ];

    $certifications = [
        'IT Specialist in HTML & CSS',
        'IT Specialist in Java',
        'IT Specialist in Databases',
        'IT Specialist in JavaScript',
        'IT Specialist in Python'
    ];

    $soft = ['Problem Solving','Communication','Teamwork','Adaptability','Time Management'];
    ?>

    <header class="header">
        <div class="header-top">
            <div class="photo-wrap">
                <?php if ($photo): ?>
                    <img class="profile-photo" src="<?= htmlspecialchars($photo, ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                <?php else: ?>
                    <?php
                    $parts = preg_split('/\s+/', trim($name));
                    $initials = '';
                    foreach ($parts as $p) { if ($p !== '') $initials .= strtoupper($p[0]); if (strlen($initials) >= 2) break; }
                    ?>
                    <div class="profile-photo profile-fallback" aria-label="Profile photo placeholder"><?= htmlspecialchars($initials, ENT_QUOTES, 'UTF-8'); ?></div>
                <?php endif; ?>
                <span class="photo-accent" aria-hidden="true"></span>
            </div>

            <div class="header-info">
                <h1><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></h1>
                <p class="title"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></p>
                <div class="header-contact">
                    <span><a href="mailto:<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></a></span>
                    <span>•</span>
                    <span><a href="tel:<?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?></a></span>
                    <span>•</span>
                    <span><?= htmlspecialchars($location, ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
            </div>
        </div>
    </header>

    <div class="layout">
        <aside class="left">
            <section class="contact">
                <h2>Contact</h2>
                <ul>
                    <li><strong>Email:</strong> <a href="mailto:<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></a></li>
                    <li><strong>Phone:</strong> <a href="tel:<?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?></a></li>
                    <li><strong>Location:</strong> <?= htmlspecialchars($location, ENT_QUOTES, 'UTF-8'); ?></li>
                </ul>
            </section>

            <section>
                <h2>Education</h2>
                <?php foreach ($education as $edu): ?>
                    <div class="entry">
                        <div class="entry-header">
                            <div>
                                <h3><?= htmlspecialchars($edu['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p><?= htmlspecialchars($edu['school'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                            <strong><?= htmlspecialchars($edu['date'], ENT_QUOTES, 'UTF-8'); ?></strong>
                        </div>
                        <?php if (!empty($edu['bullets'])): ?>
                            <ul>
                                <?php foreach ($edu['bullets'] as $b): ?>
                                    <li><?= htmlspecialchars($b, ENT_QUOTES, 'UTF-8'); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </section>

            <section>
                <h2>Certifications</h2>
                <ul>
                    <?php foreach ($certifications as $c): ?>
                        <li><?= htmlspecialchars($c, ENT_QUOTES, 'UTF-8'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section>
                <h2>Soft Skills</h2>
                <ul>
                    <?php foreach ($soft as $s): ?>
                        <li><?= htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section>
                <h2>References</h2>
                <p>Available upon request</p>
            </section>
        </aside>

        <div class="right">
            <section>
                <h2>Profile</h2>
                <p><?= htmlspecialchars($summary, ENT_QUOTES, 'UTF-8'); ?></p>
            </section>

            <section>
                <h2>Projects</h2>
                <?php foreach ($projects as $p): ?>
                    <div class="entry">
                        <h3><?= htmlspecialchars($p['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <?php if (!empty($p['bullets'])): ?>
                            <ul>
                                <?php foreach ($p['bullets'] as $b): ?>
                                    <li><?= htmlspecialchars($b, ENT_QUOTES, 'UTF-8'); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </section>

            <section>
                <h2>Technical Skills</h2>
                <ul>
                    <?php foreach ($skills as $sk): ?>
                        <li><?= htmlspecialchars($sk, ENT_QUOTES, 'UTF-8'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>
    </div>

</main>
</body>
</html>