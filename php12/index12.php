<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="<?php $_PHP_SELF; ?>" method="POST">
        Vardas: <input type="text" name="vardas" value="" />
        Pavarde: <input type="text" name="pavarde" value="" />
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if($_POST['vardas'] && $_POST['pavarde']) {
        echo "Vardas: ". $_POST['vardas'] . ' <br>' . "Pavarde: ". $_POST['pavarde'];
    }
 else {
        if(preg_match("/[^A-Za-z'-]/", $_POST['vardas'] or $_POST['pavarde'])) {
        die("Neteisingai ivesta");
        }
    }
    ?>
</body>

</html>
