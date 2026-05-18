<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ten People - De Jesus</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $imgWidth = '150px'; // Change this to adjust image size

        $people = array (
            array('Cooper, Justin', 'image_justin_cooper.jpg', 28, 'Aug 31, 1997', '+63 912 345 6789'),
            array('Hill, Justin', 'image_justin_hill.jpg', 31, 'Jan 5, 1995', '+63 912 345 6789'),
            array('Laurence, Hunter', 'image_hunter_laurence.jpg', 26, 'Aug 1, 1999', '+63 912 345 6789'),
            array('Prado, Jorge', 'image_jorge_prado.jpg', 25, 'Jan 5, 2001', '+63 912 345 6789'),
            array('Roczen, Ken', 'image_ken_roczen.jpg', 32, 'Apr 29, 1994', '+63 912 345 6789'),
            array('Savatgy, Joey', 'image_joey_savatgy.jpg', 32, 'Feb 21, 1994', '+63 912 345 6789'),
            array('Sexton, Chase', 'image_chase_sexton.jpg', 26, 'Sep 23, 1999', '+63 912 345 6789'),
            array('Stewart, Malcolm', 'image_malcolm_stewart.jpg', 33, 'Oct 27, 1992', '+63 912 345 6789'),
            array('Tomac, Eli', 'image_eli_tomac.jpg', 33, 'Nov 14, 1992', '+63 912 345 6789'),
            array('Webb, Cooper', 'image_cooper_webb.jpg', 30, 'Nov 10, 1995', '+63 912 345 6789'),
        );

        $imgWidth = '75px'; // Change this to adjust image size
    ?>

    <div class="container">
        <main class="main">
            <table class="people-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Age</th>
                        <th>Birthday</th>
                        <th>Contact Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        echo "<tr><td>1</td><td>".$people[0][0]."</td><td><img src='".$people[0][1]."' alt='".$people[0][0]."' style='width: ".$imgWidth."; height: auto;'></td><td>".$people[0][2]."</td><td>".$people[0][3]."</td><td>".$people[0][4]."</td></tr>";
                        echo "<tr><td>2</td><td>".$people[1][0]."</td><td><img src='".$people[1][1]."' alt='".$people[1][0]."' style='width: ".$imgWidth."; height: auto;'></td><td>".$people[1][2]."</td><td>".$people[1][3]."</td><td>".$people[1][4]."</td></tr>";
                        echo "<tr><td>3</td><td>".$people[2][0]."</td><td><img src='".$people[2][1]."' alt='".$people[2][0]."' style='width: ".$imgWidth."; height: auto;'></td><td>".$people[2][2]."</td><td>".$people[2][3]."</td><td>".$people[2][4]."</td></tr>";
                        echo "<tr><td>4</td><td>".$people[3][0]."</td><td><img src='".$people[3][1]."' alt='".$people[3][0]."' style='width: ".$imgWidth."; height: auto;'></td><td>".$people[3][2]."</td><td>".$people[3][3]."</td><td>".$people[3][4]."</td></tr>";
                        echo "<tr><td>5</td><td>".$people[4][0]."</td><td><img src='".$people[4][1]."' alt='".$people[4][0]."' style='width: ".$imgWidth."; height: auto;'></td><td>".$people[4][2]."</td><td>".$people[4][3]."</td><td>".$people[4][4]."</td></tr>";
                        echo "<tr><td>6</td><td>".$people[5][0]."</td><td><img src='".$people[5][1]."' alt='".$people[5][0]."' style='width: ".$imgWidth."; height: auto;'></td><td>".$people[5][2]."</td><td>".$people[5][3]."</td><td>".$people[5][4]."</td></tr>";
                        echo "<tr><td>7</td><td>".$people[6][0]."</td><td><img src='".$people[6][1]."' alt='".$people[6][0]."' style='width: ".$imgWidth."; height: auto;'></td><td>".$people[6][2]."</td><td>".$people[6][3]."</td><td>".$people[6][4]."</td></tr>";
                        echo "<tr><td>8</td><td>".$people[7][0]."</td><td><img src='".$people[7][1]."' alt='".$people[7][0]."' style='width: ".$imgWidth."; height: auto;'></td><td>".$people[7][2]."</td><td>".$people[7][3]."</td><td>".$people[7][4]."</td></tr>";
                        echo "<tr><td>9</td><td>".$people[8][0]."</td><td><img src='".$people[8][1]."' alt='".$people[8][0]."' style='width: ".$imgWidth."; height: auto;'></td><td>".$people[8][2]."</td><td>".$people[8][3]."</td><td>".$people[8][4]."</td></tr>";
                        echo "<tr><td>10</td><td>".$people[9][0]."</td><td><img src='".$people[9][1]."' alt='".$people[9][0]."' style='width: ".$imgWidth."; height: auto;'></td><td>".$people[9][2]."</td><td>".$people[9][3]."</td><td>".$people[9][4]."</td></tr>";
                    ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>