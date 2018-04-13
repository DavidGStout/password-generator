<?php

    $lower = 'abcdef';
    $upper = 'ABCDEF';
    $numbers = '0123456789';
    $lorem = '*?!-';
    
    $chars = $lower . $upper . $numbers . $lorem;
    
    function random_char($string) {
    $i = mt_rand(0, strlen($string)-1);
    return $string[$i];
    }
    
    function random_string($length, $char_set) {
    $output = '';
    for($i=0; $i < $length; $i++) {

        $output .= random_char($char_set);
    }
    
    return $output;
    }
    
    echo random_string(8, $chars);
    
?>