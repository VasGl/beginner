<?php

$string = '';

if (!empty($_POST['text'])) {
    $text = strip_tags($_POST['text']);

    function mb_strrev($str = 'Привет NIX Education'): string
    {
        $r = '';
        for ($i = mb_strlen($str); $i >= 0; $i--) {
            $r .= mb_substr($str, $i, 1);
        }
        return $r;
    }

    $string .= '<br>' . '<hr>' . '<br>';
    $string .= "Вы ввели: $text";
    $string .= '<br>';
    $string .= 'А получаете: ' . mb_strrev($text);
}
