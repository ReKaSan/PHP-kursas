<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>


<body>
    <?php
    if(isset($_REQUEST['submit'])){
    if($_REQUEST['vardas'] and $_REQUEST['pavarde']) {
        if(preg_match("/[^A-Za-z'-]/", $_REQUEST['vardas'] or $_REQUEST['pavarde'])) {
           echo "Vardas: ". $_REQUEST['vardas'] . ' <br>' . "Pavarde: ". $_REQUEST['pavarde'];
        exit();
        }
    }
        else {
        die("Neteisingai ivesta");
        }
    }
    ?>

    <form action="<?php $_PHP_SELF; ?>" method="POST">
        Vardas: <input type="text" name="vardas" value="" />
        Pavarde: <input type="text" name="pavarde" value="" />
        <input type="submit" name="submit" value="submit">
    </form>

</body>

</html>
