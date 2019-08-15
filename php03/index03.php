<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>

    </style>

</head>

<body>
    <?php $x= 10; $y= 7; $a;
    $a= $x + $y;
    echo "$x + $y = $a <br>";
    $a= $x - $y;
    echo "$x - $y = $a <br>";
    $a= $x * $y;
    echo "$x * $y = $a <br>";
    $a= $x / $y;
    echo "$x / $y = $a <br>";
    $a= $x % $y;
    echo "$x % $y = $a <br>";
    ?>
    <br>
    <br>
    <?php $temp= 2;
    if ($temp < 0) {
    echo 'Ar vis dar žiema?';
    }
    elseif ($temp < -35 || $temp > 35) {
        echo 'Turbūt kalbame ne apie Lietuvos orus.';
    }
    elseif ($temp < 10) {
        echo 'Kada gi ateis pavasaris?';
    }
    elseif ($temp > 10 && $temp < 20) {
        echo 'Pagaliau pavasaris!';
    }
    elseif ($temp >= 20) {
        echo 'Gal jau vasara?';
    }
    ?>
    <br>

<!--    print_r($darbuotojai) atspausdina visa masyva-->

    </body>

</html>
