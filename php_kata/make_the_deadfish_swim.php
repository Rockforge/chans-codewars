<?php

/**
 * DESCRIPTION
 * 
 * Write a simple parser that will parse and run Deadfish.
 * Deadfish has 4 commands, each 1 character long:
 * - i increments the value (initially 0)
 * - d decrements the value
 * - s squares the value
 * - o outputs the value into the return array
 * Invalid characters should be ignored.
 * 
 */


function parse($s): array {
    $value = 0;
    $parsed = [];
    $encoded = str_split($s);

    foreach($encoded as $letter) {
        switch($letter) {
            case 'i':
                $value++;
                break;
            case 'd':
                $value--;
                break;
            case 's':
                $value = $value ** 2;
                break;
            case 'o':
                array_push($parsed, $value);
                break;
        };
    }

    return $parsed;
}

parse('iiisdoso');
