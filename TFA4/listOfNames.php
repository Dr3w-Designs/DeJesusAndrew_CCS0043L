<?php
$names = [
    'andrew de jesus',
    'jasmine sy',
    'jovs francis caburao',
    'mark benedict castro',
    'james ivan frondarina',
    'clark wayne bagtas',
    'maryclaire jashley dela cruz',
    'trina marielle viloria',
    'reiyam marquez',
    'krishnan jean santos',
    'andrei jester miranda',
    'nico fernandez',
    'john paul Salonga',
    'elvis presley',
    'wenson reyes',
    'nathaniel morales',
    'benedict cruz',
    'marco santos',
    'ysabella dela rosa',
    'miguel cosico',
];

function replace_vowels(string $value): string
{
    return str_replace(
        ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'],
        '@',
        $value
    );
}

function position_of_a(string $value): string
{
    $pos = stripos($value, 'a');
    return $pos === false ? 'N/A' : (string) $pos;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Names - De Jesus</title>
    <link rel="stylesheet" href="listOfNamesStyle.css">
</head>
<body>
    <div class="page">
        <div class="table-card">
            <div class="table-title">List of names</div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Number of characters</th>
                        <th>Uppercase first character</th>
                        <th>Replace vowels with @</th>
                        <th>Check position of character "a"</th>
                        <th>Reverse name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($names as $name): ?>
                        <tr>
                            <td><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?= strlen($name); ?></td>
                            <td><?= htmlspecialchars(ucfirst($name), ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?= htmlspecialchars(replace_vowels($name), ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?= position_of_a($name); ?></td>
                            <td><?= htmlspecialchars(strrev($name), ENT_QUOTES, 'UTF-8'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>