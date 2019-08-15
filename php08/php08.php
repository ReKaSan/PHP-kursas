<?php
$balandis = [- 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
rsort($balandis);
foreach ($balandis as $key => $value) {
    echo "$key = $value\n";

}
?>
