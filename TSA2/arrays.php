<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Arrays - De Jesus</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $motorcycleCompanies = array (
            array('husqvarna_logo_image.png', 'Husqvarna', 'Swedish Origin', 'Known for their sleek enduro and motocross bikes, Husqvarna built its first motorcycle in 1903, making it one of the oldest names in dirtbikes.'),
            array('ktm_logo_image.png', 'KTM', 'Austrian Origin', 'KTM is a Austrian motorcycle manufacturer known for their high-performance motorcycles, KTM has been a dominant force in motocross and enduro racing.'),
            array('gasgas_logo_image.png', 'Gasgas', 'Spanish Origin', 'GasGas began in Spain in 1985 and quickly became a leader in trials competitions, known for their lightweight and agile bikes.'),
            array('rieju_logo_image.png', 'Rieju', 'Spanish Origin', 'Rieju is a Spanish motorcycle manufacturer known for their innovative designs and performance-oriented bikes.'),
            array('sherco_logo_image.png', 'Sherco', 'French Origin', 'Sherco is a French motorcycle brand that has gained recognition for their trial and enduro bikes.'),
            array('ducati_logo_image.png', 'Ducati', 'Italian Origin', 'Ducati is an Italian motorcycle manufacturer known for their distinctive designs and powerful engines, recently expanding into the off-road market.'),
            array('triumph_logo_image.png', 'Triumph', 'British Origin', 'Triumph is a British motorcycle manufacturer with a rich history, known for their classic and modern bikes, recently entering the off-road scene.'),
            array('yamaha_logo_image.png', 'Yamaha', 'Japanese Origin', 'Yamaha is a Japanese motorcycle manufacturer known for their reliability and performance.'),
            array('honda_logo_image.png', 'Honda', 'Japanese Origin', 'Honda is a Japanese motorcycle manufacturer known for their innovation and quality.'),
            array('suzuki_logo_image.png', 'Suzuki', 'Japanese Origin', 'Suzuki is a Japanese motorcycle manufacturer known for their lightweight and fuel-efficient bikes.'),
        );

        $imgWidth = '85px'; // Change this to adjust image size
    ?>

<div class="container">
        <main class="main">
            <table class="motorcycleCompanies-table">
                <thead>
                    <tr>
                        <th colspan="4"><h2>Dirt Bikes Companies</h2></th>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Facts</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        usort($motorcycleCompanies, function ($a, $b) {
                            return strcasecmp($a[1], $b[1]);
                        });

                        foreach ($motorcycleCompanies as $company) {
                            echo "<tr><td><img src='images/".$company[0]."' alt='".$company[1]."' style='width: ".$imgWidth."; height: auto;'></td><td>".$company[1]."</td><td>".$company[2]."</td><td>".$company[3]."</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>