<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Operations - De Jesus</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
	$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

	$sum = array_sum($numbers);
	$difference = $numbers[0];
	$product = $numbers[0];
	$quotient = $numbers[0];

	for ($i = 1; $i < count($numbers); $i++) {
		$difference -= $numbers[$i];
		$product *= $numbers[$i];
		$quotient /= $numbers[$i];
	}

	$list = implode(', ', $numbers);
?>

	<div class="container">
		<main class="main">
			<table class="people-table">
				<caption>Array list: <?php echo $list; ?></caption>
				<tbody>
					<tr>
						<td>Addition</td>
						<td><?php echo $sum; ?></td>
					</tr>
					<tr>
						<td>Subtraction</td>
						<td><?php echo $difference; ?></td>
					</tr>
					<tr>
						<td>Multiplication</td>
						<td><?php echo $product; ?></td>
					</tr>
					<tr>
						<td>Division</td>
						<td><?php echo $quotient; ?></td>
					</tr>
				</tbody>
			</table>
		</main>
	</div>
</body>
</html>
