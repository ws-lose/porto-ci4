<?php

$shift = 3;

function encrypt($text, $shift)
{
    $result = "";

    for ($i = 0; $i < strlen($text); $i++) {
        $c = $text[$i];

        if ($c >= 'A' && $c <= 'Z') {
            $result .= chr((ord($c) - 65 + $shift) % 26 + 65);
        }
        else if ($c >= 'a' && $c <= 'z') {
            $result .= chr((ord($c) - 97 + $shift) % 26 + 97);
        }
        else {
            $result .= $c;
        }
    }

    $result = strrev($result);

    $chars = str_split($result);

    for ($i = 0; $i < count($chars) - 1; $i += 2) {
        $temp = $chars[$i];
        $chars[$i] = $chars[$i + 1];
        $chars[$i + 1] = $temp;
    }

    return implode("", $chars);
}

function decrypt($text, $shift)
{
    $chars = str_split($text);

    for ($i = 0; $i < count($chars) - 1; $i += 2) {
        $temp = $chars[$i];
        $chars[$i] = $chars[$i + 1];
        $chars[$i + 1] = $temp;
    }

    $result = implode("", $chars);
    $result = strrev($result);

    $plain = "";

    for ($i = 0; $i < strlen($result); $i++) {
        $c = $result[$i];

        if ($c >= 'A' && $c <= 'Z') {
            $plain .= chr((ord($c) - 65 - $shift + 26) % 26 + 65);
        }
        else if ($c >= 'a' && $c <= 'z') {
            $plain .= chr((ord($c) - 97 - $shift + 26) % 26 + 97);
        }
        else {
            $plain .= $c;
        }
    }

    return $plain;
}
?>