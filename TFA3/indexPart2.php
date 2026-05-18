<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Operations - De Jesus</title>

    <link rel="stylesheet" href="style.css">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
		}

		table {
			width: 640px;
			margin: 24px auto;
			border-collapse: collapse;
			background-color: #ffffff;
		}

		th, td {
			border: 1px solid #333333;
			padding: 10px 12px;
			text-align: center;
		}

		caption {
			font-weight: bold;
			padding: 10px 0;
		}
	</style>
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

	<table>
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
</body>
</html>
