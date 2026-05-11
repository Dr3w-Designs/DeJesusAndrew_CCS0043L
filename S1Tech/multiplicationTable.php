<!-- S1Tech/multiplicationTable.php -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Multiplication Table</title>
	<link rel="stylesheet" href="style.css">
	<style>
		.mt-wrapper{padding:6px}
	</style>
</head>
<body>
	<div class="mt-wrapper">
		<h2 class="mt-title">Multiplication Table - De Jesus</h2>
		<table class="mt-table" aria-label="Multiplication table">
			<thead>
				<tr>
					<?php
					// Top-left cell: white background
					?>
					<th class="cell-white"></th>
					<?php
					// Output header numbers 0 to 10; all white
					for ($h = 0; $h <= 10; $h++):
					?>
						<th class="cell-white"><?= $h ?></th>
					<?php endfor; ?>
				</tr>
			</thead>
			<tbody>
				<?php
				// Rows 0 to 10
				for ($r = 0; $r <= 10; $r++):
					// left header cell: white background
					?>
					<tr>
						<td class="cell-white"><?= $r ?></td>
						<?php
						// product cells for columns 0 to 10; visual column index = c+1
						for ($c = 0; $c <= 10; $c++):
							$val = $r * $c;
							$visCol = $c + 1;
							$cellClass = ((($r + $visCol) % 2) === 0) ? 'cell-yellow' : 'cell-red';
						?>
							<td class="<?= $cellClass ?>"><?= $val ?></td>
						<?php endfor; ?>
					</tr>
				<?php endfor; ?>
			</tbody>
		</table>
	</div>
</body>
</html>
