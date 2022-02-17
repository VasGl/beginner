<?php

if ($title === 'Урок 1') {
    echo "<h2 class='h2'>$title</h2>";
    echo getTable();
} elseif ($title === 'Урок 2') {
    echo "<h2 class='h2'>$title</h2>";
    echo getTable('color');
} else {
    echo '<h2>“Hello, NIX Education”</h2>';
}
