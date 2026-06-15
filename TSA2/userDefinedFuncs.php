<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions - De Jesus</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        function volumeCube($side) {
            return $side ** 3;
        }

        function volumeRectangularPrism($length, $width, $height) {
            return $length * $width * $height;
        }

        function volumeCylinder($radius, $height) {
            return pi() * $radius * $radius * $height;
        }

        function volumeCone($radius, $height) {
            return (pi() * $radius * $radius * $height) / 3;
        }

        function volumeSphere($radius) {
            return (4 / 3) * pi() * $radius * $radius * $radius;
        }

        $titles = array (
            'Shape',
            'Dimensions',
            'Formula',
            'Result'
        );
        $data = array(
            array('Cube', 's = 4', 'V = s^3', volumeCube(4)),
            array('Right Rectangular Prism', 'l = 6, w = 4, h = 3', 'V = l * w * h', volumeRectangularPrism(6, 4, 3)),
            array('Cylinder', 'r = 3, h = 8', 'V = pi * r^2 * h', volumeCylinder(3, 8)),
            array('Cone', 'r = 3, h = 8', 'V = (1/3) * pi * r^2 * h', volumeCone(3, 8)),
            array('Sphere', 'r = 5', 'V = (4/3) * pi * r^3', volumeSphere(5)),
        );
    ?>

    <div class="container">
        <main class="main">
            <table class="motorcycleCompanies-table">
                <thead>
                    <tr>
                        <th colspan="4"><h2>Volume of Shapes</h2></th>
                    </tr>
                    <tr>
                        <?php
                            foreach ($titles as $title) {
                                echo "<th>".$title."</th>";
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data as $row) {
                            echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".number_format($row[3], 2)."</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>

