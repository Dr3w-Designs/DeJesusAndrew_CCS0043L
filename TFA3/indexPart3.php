<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Funcs - De Jesus</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        function calculate_ops($a, $b, $c) {
            $sum = $a + $b + $c;
            $difference = $a - $b - $c;
            $product = $a * $b * $c;

            if ($b == 0 || $c == 0) {
                $quotient = 'undefined';
            } else {
                $quotient = $a / $b / $c;
            }

            return [$sum, $difference, $product, $quotient];
        }

        // Parameter values
        $param1 = 4;
        $param2 = 19;
        $param3 = 5;

        // Calculate results
        $results = calculate_ops($param1, $param2, $param3);
        $param_list = $param1 . ', ' . $param2 . ', ' . $param3;
    ?>

    <div class="container">
        <main class="main">
            <table class="people-table">
                <thead>
                    <tr>
                        <th colspan="2">My Parameter values: <?php echo $param_list; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Addition</td>
                        <td><?php echo $results[0]; ?></td>
                    </tr>
                    <tr>
                        <td>Subtraction</td>
                        <td><?php echo $results[1]; ?></td>
                    </tr>
                    <tr>
                        <td>Multiplication</td>
                        <td><?php echo $results[2]; ?></td>
                    </tr>
                    <tr>
                        <td>Division</td>
                        <td><?php echo $results[3]; ?></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>