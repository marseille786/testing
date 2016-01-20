<?php

function draw_menu($arr) {
    var_dump($arr);

    $i = 0;
    foreach ($arr as $item) {
        if ($i++ == 0) continue;
        echo "<p>$item</p>";
    }
}