<?php

function accum($s) {
    // Change this whole lot of nonsense into an array
    $str = '';
    $holder = str_split($s);

    foreach($holder as $key => $letter) {
        $str .= ucfirst(strtolower(str_repeat($letter, $key+1)));
        if($key != count($holder)-1) {
            $str .= '-';
        }
    }
    return $str;
}
echo accum('abcd');