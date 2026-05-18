<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ten People - De Jesus</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php>
        /*$people = [
            ['name' => 'Cooper, Justin', 'image' => 'image_justin_cooper.jpg', 'age' => 28, 'bDay' => 'Aug 31, 1997', 'cpNum' => '+63 912 345 6789'],
            ['name' => 'Hill, Justin', 'image' => 'image_justin_hill.jpg', 'age' => 31, 'bDay' => 'Jan 5, 1995', 'cpNum' => '+63 912 345 6789'],
            ['name' => 'Laurence, Hunter', 'image' => 'image_hunter_laurence.jpg', 'age' => 26, 'bDay' => 'Aug 1, 1999', 'cpNum' => '+63 912 345 6789'],
            ['name' => 'Prado, Jorge', 'image' => 'image_jorge_prado.jpg', 'age' => 25, 'bDay' => 'Jan 5, 2001', 'cpNum' => '+63 912 345 6789'],
            ['name' => 'Roczen, Ken', 'image' => 'image_ken_roczen.jpg', 'age' => 32, 'bDay' => 'Apr 29, 1994', 'cpNum' => '+63 912 345 6789'],
            ['name' => 'Savatgy, Joey', 'image' => 'image_joey_savatgy.jpg', 'age' => 32, 'bDay' => 'Feb 21, 1994', 'cpNum' => '+63 912 345 6789'],
            ['name' => 'Sexton, Chase', 'image' => 'image_chase_sexton.jpg', 'age' => 26, 'bDay' => 'Sep 23, 1999', 'cpNum' => '+63 912 345 6789'],
            ['name' => 'Stewart, Malcolm', 'image' => 'image_malcolm_stewart.jpg', 'age' => 33, 'bDay' => 'Oct 27, 1992', 'cpNum' => '+63 912 345 6789'],
            ['name' => 'Tomac, Eli', 'image' => 'image_eli_tomac.jpg', 'age' => 33, 'bDay' => 'Nov 14, 1992', 'cpNum' => '+63 912 345 6789'],
            ['name' => 'Webb, Cooper', 'image' => 'image_cooper_webb.jpg', 'age' => 30, 'bDay' => 'Nov 10, 1995', 'cpNum' => '+63 912 345 6789'],
        ]; */
    ?>

    <div class="container">
        <header class="header">
            <div>
                <h1>Header</h1>
            </div>
            <nav>
                <ul>
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                </ul>
            </nav>
        </header>
        <main class="main">
            <div>
                <?php include("friend1.php"); ?>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quia earum nihil dolorem temporibus neque eveniet fuga itaque ad quas recusandae ipsa sit, reiciendis illo labore. Eum magnam recusandae ducimus?</p>
            </div>
        </main>
        <footer>
            <p>Footer</p>
        </footer>
    </div>
</body>
</html>