<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failas skaitymui su PHP</title>
</head>

<body>
    <?php
    $filename = 'text.txt';
    $file = fopen($filename, "r");

    $filesize = filesize($filename);
    $filetext = fread($file, $filesize);
    fclose($file);

    echo "Failo dydis: $filesize B";
    echo "<pre>$filetext</pre>";
    ?>
</body>
</html>
