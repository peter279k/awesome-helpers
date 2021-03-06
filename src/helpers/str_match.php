<?php

function str_match($string, $pattern)
{
    if (@preg_match($pattern, $string) === false) {
        $pattern = '#'.preg_quote($pattern, '#').'#';
    }

    return preg_match($pattern, $string) === 1;
}
