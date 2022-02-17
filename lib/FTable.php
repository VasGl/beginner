<?php

function getTable(string $tit): string
{
    $str = '<table class="table">';
    $str .= '<tr>';
    for ($x = 1; $x <= 10; $x++) {
        $str .= '<td>';
        for ($y = 1; $y <= 10; $y++) {
            $str .= "$x * $y = " . $x * $y . PHP_EOL . '<br>';
        }
        $str .= '</td>';
        if ($x == 5) {
            $str .= '</tr>' . PHP_EOL . '<tr>';
        }
    }
    $str .= '</tr>';
    $str .= '</table>';

    return $str;
}
