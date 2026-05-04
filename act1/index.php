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
$name = 'Andrew J. De Jesus';
$title = 'IT Specialist - Web and Mobile Applications';
$email = 'ajdejesus@fit.edu.ph';
$phone = '+63-9420600001';
$location = 'Sta. Maria, Bulacan, Philippines';
$summary = 'A motivated Information Technology student with hands-on experience in web development, programming, databases, and basic network troubleshooting. Skilled in HTML, CSS, JavaScript, Python, and SQL. Seeking an entry-level IT or web development role.';
$photo = file_exists(__DIR__ . '/photo.jpg') ? 'photo.jpg' : '';
?>

<main class="resume">
    <header class="header">
        <div class="header-top">
            <div class="photo-wrap">
                <?php if ($photo) { ?>
                    <img class="profile-photo" src="<?= htmlspecialchars($photo, ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                <?php } else { ?>
                    <div class="profile-photo profile-fallback" aria-label="Profile photo placeholder">AJ</div>
                <?php } ?>
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
                <h2>Profile</h2>
                <p><?= htmlspecialchars($summary, ENT_QUOTES, 'UTF-8'); ?></p>
            </section>

            <section>
                <h2>Education</h2>
                <div class="entry">
                    <div class="entry-header">
                        <div>
                            <h3>Bachelor of Science in Information Technology - Web and Mobile Applications</h3>
                            <p>Far Eastern University: Institute of Technology</p>
                        </div>
                        <strong>Aug 2024 - Present</strong>
                    </div>
                    <ul>
                        <li>Built responsive websites using HTML, CSS, and JavaScript.</li>
                        <li>Designed and managed databases using SQL.</li>
                        <li>Developed applications using Python and Java.</li>
                    </ul>
                </div>
            </section>

            <section>
                <h2>Skills</h2>
                <ul>
                    <li>HTML, CSS, JavaScript</li>
                    <li>Python, Java</li>
                    <li>SQL &amp; Databases</li>
                    <li>Responsive Design</li>
                    <li>Basic Networking</li>
                    <li>Git &amp; GitHub</li>
                    <li>Problem Solving</li>
                    <li>Communication</li>
                    <li>Teamwork</li>
                    <li>Adaptability</li>
                    <li>Time Management</li>
                </ul>
            </section>

            <section>
                <h2>Certifications</h2>
                <ul>
                    <li>IT Specialist in HTML &amp; CSS</li>
                    <li>IT Specialist in Java</li>
                    <li>IT Specialist in Databases</li>
                    <li>IT Specialist in JavaScript</li>
                    <li>IT Specialist in Python</li>
                </ul>
            </section>
        </aside>

        <div class="right">
            <section>
                <h2>Projects</h2>
                <div class="entry">
                    <h3>ChemCarnate</h3>
                    <ul>
                        <li>A chemistry learning web app with interactive quizzes.</li>
                    </ul>
                </div>
                <div class="entry">
                    <h3>Enduro Lab</h3>
                    <ul>
                        <li>A laboratory workflow tracker for experiments and scheduling.</li>
                    </ul>
                </div>
                <div class="entry">
                    <h3>Swift Stack</h3>
                    <ul>
                        <li>A productivity platform for tasks, notes, and deadlines.</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

    <section class="references-bottom">
        <h2>References</h2>
        <p>Available upon request</p>
    </section>
</main>
</body>
</html>
