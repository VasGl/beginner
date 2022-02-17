<?php

function getTable($color = ''): string
{
    $colTable = ($color !== '') ? 'colorTable' : '';
    $tab = PHP_EOL . "<table class='table $colTable'>";
    $tab .= PHP_EOL . '<tr>';
    for ($x = 1; $x <= 10; $x++) {
        $tab .= PHP_EOL . '<td>' . PHP_EOL;
        for ($y = 1; $y <= 10; $y++) {
            if ($color !== '') {
                $tab .= getColor($x) . ' * ' . getColor($y) . ' = ';
                $tab .= getColor($x * $y) . '<br>' . PHP_EOL;
            } else {
                $tab .= "$x * $y = " . $x * $y . '<br>' . PHP_EOL;
            }
        }
        $tab .= '</td>';
        if ($x == 5) {
            $tab .= PHP_EOL . '</tr>' . PHP_EOL . '<tr>';
        }
    }
    $tab .= PHP_EOL . '</tr>';
    $tab .= PHP_EOL . '</table>' . PHP_EOL;

    return $tab;
}

function getColor(int $num): string
{
    $res = '';
    $arr = str_split($num);

    foreach ($arr as $val) {
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
            default:
                $color = '';
        }

//        php 8+
//        $color = match ($val) {
//            '1' => 'one',
//            '2' => 'two',
//            '3' => 'three',
//            '4' => 'four',
//            default => '',
//        };

        if ($color !== '') {
            $res .= "<span class='$color'>" . $val . '</span>';
        } else {
            $res .= $val;
        }
    }

    return $res;
}
