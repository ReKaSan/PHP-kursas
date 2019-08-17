

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <?php
    if(isset($_POST['submit'])){
    if($_REQUEST['aukstis'] && $_REQUEST['plotis']) {
         $plotas = $_POST['aukstis'] * $_POST['plotis'];
        echo 'Stačiakampio plotas: ' . $plotas. 'kv.m';
        exit();
    }
    else {
        die ("Užpildykite visas eilutes");
    }
    }
    ?>

    <form action="<?php $_PHP_SELF; ?>" method="POST">
        Aukštis: <input type="text" name="aukstis" value=""/>
        Plotis: <input type="text" name="plotis" value=""/>
        <input type="submit" name="submit" value="Skaiciuoti">
    </form>
</body>

</html>
