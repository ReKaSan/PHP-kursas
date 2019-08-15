<?php echo "<table border=\"1\">";
for ($row = 1; $row <= 10; $row++) {
    echo "<tr>\n";
    for($col = 1; $col <= 10; $col++) {
        $x = $col * $row;
        echo "<td>$x</td>\n";
    }
    echo "</tr>";
}
echo "</table>";
?>


<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        tr {
            height: 40px;
            text-align: center;
        }
        td {
            width: 60px;
        }

    </style>
</head>

<body>

</body>
</html>
