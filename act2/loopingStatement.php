<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Two-Digit Decimal Combinations</title>
	<link rel="stylesheet" href="style.css">
	<style>
		.simple-box {
			background: #fff;
			border: 1px solid var(--line);
			padding: 16px;
		}

		.result {
			margin-top: 10px;
			line-height: 1.7;
			word-wrap: break-word;
		}
	</style>
</head>
<body>
	<main class="reference-shell">
		<section class="hero">
			<p class="eyebrow">PHP Looping Statement</p>
			<h1>Two-Digit Decimal Combinations</h1>
			<p class="subtitle">Simple output using nested for loops.</p>
		</section>

		<section class="simple-box">
			<h3>Possible combinations (00 to 99):</h3>
			<p class="result">
				<?php
				$counter = 0;

				for ($firstDigit = 0; $firstDigit <= 9; $firstDigit++) {
					for ($secondDigit = 0; $secondDigit <= 9; $secondDigit++) {
						echo $firstDigit . $secondDigit;

						$counter++;
						if ($counter < 100) {
							echo ', ';
						}
					}
				}
				?>
			</p>
		</section>
	</main>
</body>
</html>
