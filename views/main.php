<?php

echo "<h2>$title</h2>";
if ($title === 'Урок 1') {
    echo getTable();
} elseif ($title === 'Урок 2') {
    echo getTable('color');
} else {
    echo '<h2>“Hello, NIX Education”</h2>';
}
