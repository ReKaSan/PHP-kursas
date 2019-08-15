<?php
$cities = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <ul>
        <?php
                for ($i = 0; $i < count($cities); $i++) {
            echo "<li>$cities[$i]</li>\n";
        }
        ?>
    </ul>

    <ul>
        <?php foreach ($cities as $city) {
    echo "<li>$city</li>\n";
}
        ?>

    </ul>

</body>
</html>
