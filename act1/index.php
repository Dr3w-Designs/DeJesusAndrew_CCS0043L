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
        $name = "Andrew J. De Jesus";
        $title = "IT Specialist - Web and Mobile Applications";
        $email = "ajdejesus@fit.edu.ph";
        $phoneNum = "+63-9420600001";
        $location = "Sta. Maria, Bulacan, Philippines";
        $photoFile = "";
        $photoCandidates = [
            "photo.jpg",
            "photo.jpeg",
            "photo.png",
            "profile.jpg",
            "profile.jpeg",
            "profile.png",
            "my-photo.jpg",
            "myphoto.jpg"
        ];

        foreach ($photoCandidates as $candidate) {
            $candidatePath = __DIR__ . DIRECTORY_SEPARATOR . $candidate;

            if (file_exists($candidatePath)) {
                $photoFile = $candidate;
                break;
            }
        }

        if ($photoFile === "") {
            $photoMatches = glob(__DIR__ . DIRECTORY_SEPARATOR . "*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}", GLOB_BRACE);

            if (!empty($photoMatches)) {
                $photoFile = basename($photoMatches[0]);
            }
        }

        $photoExists = $photoFile !== "";
        $initials = "AJ";
        $nameParts = preg_split('/\s+/', trim($name));

        if (is_array($nameParts)) {
            $generatedInitials = "";

            foreach ($nameParts as $part) {
                if ($part !== "") {
                    $generatedInitials .= strtoupper(substr($part, 0, 1));
                }

                if (strlen($generatedInitials) >= 2) {
                    break;
                }
            }

            if ($generatedInitials !== "") {
                $initials = $generatedInitials;
            }
        }

        $summary = "A motivated Information Technology student with hands-on experience in web development, programming, databases, and basic network troubleshooting. Skilled in HTML, CSS, JavaScript, Python, and SQL, with experience completing academic and personal IT projects. Strong problem-solving abilities, attention tp detail, and a willingnes to learn new technologies. Seeking an entry-level IT, help desk, web development, or technical support role where I can apply my skills and continue growing professionally.";
        
        $education1 = "Bachelor of Science in Information Technology - Web and Mobile Applications";
        $university = "Far Eastern University: Institute of Technology";

        $educationDescription1 = "Web Development: Built responsive websites using HTML, CSS, and JavaScript.";
        $educationDescription2 = "Database Systems: Designed and managed databases using SQL.";
        $educationDescription3 = "Programming: Developed applications using Python and Java.";
        $educationDescription4 = "Networking: Learned basic network configuration, IP addressing, and troubleshooting.";
        $educationDescription5 = "System Analysis: Studied software development planning, documentation, and user requirements.";

        $projectDescription1 = "A chemistry learning web app with interactive quizzes and topic-based study modules.";
        $projectDescription2 = "A laboratory workflow tracker that records experiments, schedules tasks, and organizes results.";
        $projectDescription3 = "A productivity platform for managing tasks, notes, and deadlines in one dashboard.";

        $certification1 = "Information Technology Specialist in HTML & CSS";
        $certification2 = "Information Technology Specialist in Java";
        $certification3 = "Information Technology Specialist in Databases";
        $certification4 = "Information Technology Specialist in JavaScript";
        $certification5 = "Information Technology Specialist in Python";

        $technicalSkill1 = "HTML, CSS, and JavaScript";
        $technicalSkill2 = "Python and Java Programming";
        $technicalSkill3 = "SQL and Database Management";
        $technicalSkill4 = "Responsive Web Designs";
        $technicalSkill5 = "Basic Networking and Troubleshooting";
        $technicalSkill6 = "Windows and MACOS Basics";
        $technicalSkill7 = "Microsoft Office and Google Workspace";
        $technicalSkill8 = "Git and Github";

        $softSkill1 = "Problem Solving";
        $softSkill2 = "Communication Skills";
        $softSkill3 = "Teamwork and Collaboration";
        $softSkill4 = "Adaptability and Flexibility";
        $softSkill5 = "Time Management";
        $softSkill6 = "Attention to Detail";
        $softSkill7 = "Willingness to Learn";
    ?>
    <main class = "resume">

        <header class = "header">
            <div class="header-top">
                <?php if ($photoExists): ?>
                    <img class="profile-photo" src="<?= htmlspecialchars($photoFile, ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?> profile photo">
                <?php else: ?>
                    <div class="profile-photo profile-fallback" aria-label="Profile photo placeholder"><?= htmlspecialchars($initials, ENT_QUOTES, 'UTF-8'); ?></div>
                <?php endif; ?>

                <div class="header-info">
                    <h1><?php echo $name; ?></h1>
                    <p><?= $title; ?> </p>
                    <p><?= $email; ?> </p>
                    <p><?= $phoneNum; ?> </p>
                    <p><?= $location; ?> </p>
                </div>
            </div>
        </header>

        <section>
            <h2>Summary</h2>
            <p><?= $summary; ?></p>
        </section>

        <section> 
            <h2>Education</h2>

            <div class = "entry">
                <div class = "entry-header">
                    <div>
                        <h3><?= $education1; ?></h3>
                        <p><?= $university; ?></p>
                    </div>
                <strong>August 2024 - Present</strong>
            </div>

            <ul>
                <li><?= $educationDescription1; ?></li>
                <li><?= $educationDescription2; ?></li>
                <li><?= $educationDescription3; ?></li>
                <li><?= $educationDescription4; ?></li>
                <li><?= $educationDescription5; ?></li>
            </ul>
            </div>
        </section>

        <section>
            <h2>Projects</h2>    
            
            <div class = "entry">
                <h3>ChemCarnate</h3>
                <ul>
                    <li><?= $projectDescription1; ?></li>
                </ul>
            </div>

            <div class = "entry">
                <h3>Enduro Lab</h3>
                <ul>
                    <li><?= $projectDescription2; ?></li>
                </ul>
            </div>

            <div class = "entry">
                <h3>Swift Stack</h3>
                <ul>
                    <li><?= $projectDescription3; ?></li>
                </ul>
            </div>
        </section>

        <section>
            <h2>Technical Skills</h2>    
                <ul>
                    <li><?= $technicalSkill1; ?></li>
                    <li><?= $technicalSkill2; ?></li>
                    <li><?= $technicalSkill3; ?></li>
                    <li><?= $technicalSkill4; ?></li>
                    <li><?= $technicalSkill5; ?></li>
                    <li><?= $technicalSkill6; ?></li>
                    <li><?= $technicalSkill7; ?></li>
                    <li><?= $technicalSkill8; ?></li>
                </ul>
        </section>

        <section>
            <h2>Certifications</h2>
            <ul>
                <li><?= $certification1; ?></li>
                <li><?= $certification2; ?></li>
                <li><?= $certification3; ?></li>
                <li><?= $certification4; ?></li>
                <li><?= $certification5; ?></li>
            </ul>
        </section>

        <section>
            <h2>Soft Skills</h2>
            <ul>
                <li><?= $softSkill1; ?></li>
                <li><?= $softSkill2; ?></li>
                <li><?= $softSkill3; ?></li>
                <li><?= $softSkill4; ?></li>
                <li><?= $softSkill5; ?></li>
                <li><?= $softSkill6; ?></li>
                <li><?= $softSkill7; ?></li>
            </ul>
        </section>

        <section>
            <h2>References</h2>
            <p>Available Upon Request</p>
        </section>
    </main>
</body>
</html>