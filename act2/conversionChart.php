<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $pageTitle = 'Length Conversion Reference';
    $heroLabel = 'PHP Length Conversion - De Jesus, Andrew J.';
    $heroTitle = 'Length Conversions';
    $heroSubtitle = 'A static display of metric and imperial length conversions with the matching abbreviations.';

    $metricTitle = 'Metric Conversions';
    $metric1Left = '1 centimetre';
    $metric1Right = '10 millimetres';
    $metric1AbbrLeft = '1 cm';
    $metric1AbbrRight = '10 mm';
    $metric2Left = '1 decimetre';
    $metric2Right = '10 centimetres';
    $metric2AbbrLeft = '1 dm';
    $metric2AbbrRight = '10 cm';
    $metric3Left = '1 metre';
    $metric3Right = '100 centimetres';
    $metric3AbbrLeft = '1 m';
    $metric3AbbrRight = '100 cm';
    $metric4Left = '1 kilometre';
    $metric4Right = '1000 metres';
    $metric4AbbrLeft = '1 km';
    $metric4AbbrRight = '1000 m';

    $imperialTitle = 'Imperial Conversions';
    $imperial1Left = '1 foot';
    $imperial1Right = '12 inches';
    $imperial1AbbrLeft = '1 ft';
    $imperial1AbbrRight = '12 in';
    $imperial2Left = '1 yard';
    $imperial2Right = '3 feet';
    $imperial2AbbrLeft = '1 yd';
    $imperial2AbbrRight = '3 ft';
    $imperial3Left = '1 chain';
    $imperial3Right = '22 yards';
    $imperial3AbbrLeft = '1 ch';
    $imperial3AbbrRight = '22 yd';
    $imperial4Left = '1 furlong';
    $imperial4Right = '220 yards';
    $imperial4AbbrLeft = '1 fur';
    $imperial4AbbrRight = '220 yd';
    $imperial5Left = '1 mile';
    $imperial5Right = '1760 yards';
    $imperial5AbbrLeft = '1 mi';
    $imperial5AbbrRight = '1760 yd';

    $metricToImperialTitle = 'Metric -> Imperial Conversions';
    $mti1Left = '1 millimetre';
    $mti1Right = '0.03937 inches';
    $mti1AbbrLeft = '1 mm';
    $mti1AbbrRight = '0.03937 in';
    $mti2Left = '1 centimetre';
    $mti2Right = '0.39370 inches';
    $mti2AbbrLeft = '1 cm';
    $mti2AbbrRight = '0.39370 in';
    $mti3Left = '1 metre';
    $mti3Right = '39.37008 inches';
    $mti3AbbrLeft = '1 m';
    $mti3AbbrRight = '39.3708 in';
    $mti4Left = '1 metre';
    $mti4Right = '3.28084 feet';
    $mti4AbbrLeft = '1 m';
    $mti4AbbrRight = '3.28084 ft';
    $mti5Left = '1 metre';
    $mti5Right = '1.09361 yards';
    $mti5AbbrLeft = '1 m';
    $mti5AbbrRight = '1.09361 yd';
    $mti6Left = '1 kilometre';
    $mti6Right = '1093.6133 yards';
    $mti6AbbrLeft = '1 km';
    $mti6AbbrRight = '1093.613 yd';
    $mti7Left = '1 kilometre';
    $mti7Right = '0.62137 miles';
    $mti7AbbrLeft = '1 km';
    $mti7AbbrRight = '0.62137 mi';

    $itmTitle = 'Imperial -> Metric Conversions';
    $itm1Left = '1 inch';
    $itm1Right = '2.54 centimetres';
    $itm1AbbrLeft = '1 in';
    $itm1AbbrRight = '2.54 cm';
    $itm2Left = '1 foot';
    $itm2Right = '30.48 centimetres';
    $itm2AbbrLeft = '1 ft';
    $itm2AbbrRight = '30.48 cm';
    $itm3Left = '1 yard';
    $itm3Right = '91.44 centimetres';
    $itm3AbbrLeft = '1 yd';
    $itm3AbbrRight = '91.44 cm';
    $itm4Left = '1 yard';
    $itm4Right = '0.9144 metres';
    $itm4AbbrLeft = '1 yd';
    $itm4AbbrRight = '0.9144 m';
    $itm5Left = '1 mile';
    $itm5Right = '1609.344 metres';
    $itm5AbbrLeft = '1 mi';
    $itm5AbbrRight = '1609.344 m';
    $itm6Left = '1 mile';
    $itm6Right = '1.609344 kilometres';
    $itm6AbbrLeft = '1 mi';
    $itm6AbbrRight = '1.609344 km';
    ?>
	<main class="reference-shell">
		<section class="hero">
			<p class="eyebrow"><?php echo $heroLabel; ?></p>
			<h1><?php echo $heroTitle; ?></h1>
			<p class="subtitle"><?php echo $heroSubtitle; ?></p>
		</section>

		<section class="conversion-panel">
			<div class="table-title"><?php echo $metricTitle; ?></div>
			<table class="conversion-table">
				<tbody>
					<tr>
						<td class="primary-text"><?php echo $metric1Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $metric1Right; ?></td>
						<td class="secondary-text"><?php echo $metric1AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $metric1AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $metric2Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $metric2Right; ?></td>
						<td class="secondary-text"><?php echo $metric2AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $metric2AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $metric3Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $metric3Right; ?></td>
						<td class="secondary-text"><?php echo $metric3AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $metric3AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $metric4Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $metric4Right; ?></td>
						<td class="secondary-text"><?php echo $metric4AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $metric4AbbrRight; ?></td>
					</tr>
				</tbody>
			</table>
		</section>

		<section class="conversion-panel">
			<div class="table-title"><?php echo $imperialTitle; ?></div>
			<table class="conversion-table">
				<tbody>
					<tr>
						<td class="primary-text"><?php echo $imperial1Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $imperial1Right; ?></td>
						<td class="secondary-text"><?php echo $imperial1AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $imperial1AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $imperial2Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $imperial2Right; ?></td>
						<td class="secondary-text"><?php echo $imperial2AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $imperial2AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $imperial3Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $imperial3Right; ?></td>
						<td class="secondary-text"><?php echo $imperial3AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $imperial3AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $imperial4Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $imperial4Right; ?></td>
						<td class="secondary-text"><?php echo $imperial4AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $imperial4AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $imperial5Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $imperial5Right; ?></td>
						<td class="secondary-text"><?php echo $imperial5AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $imperial5AbbrRight; ?></td>
					</tr>
				</tbody>
			</table>
		</section>

		<section class="conversion-panel">
			<div class="table-title"><?php echo $metricToImperialTitle; ?></div>
			<table class="conversion-table">
				<tbody>
					<tr>
						<td class="primary-text"><?php echo $mti1Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $mti1Right; ?></td>
						<td class="secondary-text"><?php echo $mti1AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $mti1AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $mti2Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $mti2Right; ?></td>
						<td class="secondary-text"><?php echo $mti2AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $mti2AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $mti3Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $mti3Right; ?></td>
						<td class="secondary-text"><?php echo $mti3AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $mti3AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $mti4Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $mti4Right; ?></td>
						<td class="secondary-text"><?php echo $mti4AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $mti4AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $mti5Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $mti5Right; ?></td>
						<td class="secondary-text"><?php echo $mti5AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $mti5AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $mti6Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $mti6Right; ?></td>
						<td class="secondary-text"><?php echo $mti6AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $mti6AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $mti7Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $mti7Right; ?></td>
						<td class="secondary-text"><?php echo $mti7AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $mti7AbbrRight; ?></td>
					</tr>
				</tbody>
			</table>
		</section>

		<section class="conversion-panel">
			<div class="table-title"><?php echo $itmTitle; ?></div>
			<table class="conversion-table">
				<tbody>
					<tr>
						<td class="primary-text"><?php echo $itm1Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $itm1Right; ?></td>
						<td class="secondary-text"><?php echo $itm1AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $itm1AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $itm2Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $itm2Right; ?></td>
						<td class="secondary-text"><?php echo $itm2AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $itm2AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $itm3Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $itm3Right; ?></td>
						<td class="secondary-text"><?php echo $itm3AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $itm3AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $itm4Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $itm4Right; ?></td>
						<td class="secondary-text"><?php echo $itm4AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $itm4AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $itm5Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $itm5Right; ?></td>
						<td class="secondary-text"><?php echo $itm5AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $itm5AbbrRight; ?></td>
					</tr>
					<tr>
						<td class="primary-text"><?php echo $itm6Left; ?></td>
						<td class="symbol">=</td>
						<td class="primary-text"><?php echo $itm6Right; ?></td>
						<td class="secondary-text"><?php echo $itm6AbbrLeft; ?></td>
						<td class="symbol">=</td>
						<td class="secondary-text"><?php echo $itm6AbbrRight; ?></td>
					</tr>
				</tbody>
			</table>
		</section>
	</main>
</body>
</html>
