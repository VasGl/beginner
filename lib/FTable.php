<?php

function getTable($color = ''): string
{
    $tab = '';
    $tab .= '<table>';
    $tab .= '<tr>';
    for ($x = 1; $x <= 10; $x++) {
        $tab .= '<td>';
        for ($y = 1; $y <= 10; $y++) {
            $tab .= getString($x, $y, $color);
        }
        $tab .= '</td>';
        if ($x == 5) {
            $tab .= '</tr>' . PHP_EOL . '<tr>';
        }
    }
    $tab .= '</tr>';
    $tab .= '</table>';

    return $tab;
}

function getString($x, $y, $col = ''): string
{
    $str = '';
    if ($col === 'color') {
        $str .= colorString("$x * $y = " . $x * $y);
        $str .= '<br>';
    } else {
        $str .= "$x * $y = " . $x * $y . '<br>';
    }
    return $str;
}

function colorString(string $str)
{
    $res = '';
    $arr = str_split($str);

    foreach ($arr as $val) {
        $color = null;
        if ((int)($val)) {
//            php < 8.0
            switch ($val) {
                case '1':
                    $color = 'one';
                    break;
                case '2':
                    $color = 'two';
                    break;
                case '3':
                    $color = 'three';
                    break;
                case '4':
                    $color = 'four';
                    break;
            }

//        php 8+
//        $color = match ($val) {
//            1 => 'one',
//            2 => 'two',
//            3 => 'three',
//            4 => 'four',
//        };

        }
        if (isset($color)) {
            $res .= "<span class='$color'>" . $val . '</span>';
        } else {
            $res .= $val;
        }
    }
    return $res;
}
