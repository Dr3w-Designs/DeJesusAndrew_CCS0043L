<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grade Ranking Window</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $studentName = 'Andrew J. De Jesus';
    $grade = 90;

    if ($grade >= 93) {
        $ranking = 'A';
    } elseif ($grade >= 90) {
        $ranking = 'A-';
    } elseif ($grade >= 87) {
        $ranking = 'B+';
    } elseif ($grade >= 83) {
        $ranking = 'B';
    } elseif ($grade >= 80) {
        $ranking = 'B-';
    } elseif ($grade >= 77) {
        $ranking = 'C+';
    } elseif ($grade >= 73) {
        $ranking = 'C';
    } elseif ($grade >= 70) {
        $ranking = 'C-';
    } elseif ($grade >= 67) {
        $ranking = 'D+';
    } elseif ($grade >= 63) {
        $ranking = 'D';
    } elseif ($grade >= 60) {
        $ranking = 'D-';
    } else {
        $ranking = 'F';
    }

    $gradeLabel = $grade;
    ?>
    
	<main class="reference-shell">
		<section class="hero">
			<p class="eyebrow">PHP Conditional Statement</p>
			<h1>Grade Ranking Program</h1>
			<p class="subtitle">A static display that uses conditional statements to show the rank and grade.</p>
		</section>

		<section class="ranking-window" aria-label="Grade ranking display">
			<div class="ranking-name-box">
				<span class="label-inline">Name:</span>
				<span><?php echo htmlspecialchars($studentName); ?></span>
			</div>

			<div class="ranking-content">
				<div class="ranking-card">
					<div class="card-label">Rank:</div>
					<div class="card-value"><?php echo htmlspecialchars($ranking); ?></div>
				</div>

				<div class="ranking-card">
					<div class="card-label">Grade:</div>
					<div class="card-value"><?php echo htmlspecialchars($gradeLabel); ?></div>
				</div>

				<div class="picture-box">
					<img src="photo.jpg" alt="Profile photo of the student">
				</div>
			</div>
		</section>
	</main>
</body>
</html>