<?php
setcookie("name", "Valdas Adamkus", time()+3600, "/", "", 0);
setcookie("age", "92", time()+3600, "/", "", 0);
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuriame ir pasiekiame Cookies</title>
</head>

<body>

    <?php
    if(isset($_COOKIE["name"])) {
        echo 'Welcome, ' . $_COOKIE["name"] . '<br>';
        echo 'You are ' . $_COOKIE["age"] . ' years old';
    }
    else {
        echo "Who you are?";
    }
    ?>
</body>
</html>
