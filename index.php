<?php

    
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
    
    
    function generate_password($length) {
    // define character sets
    $lower = 'abcdef';
    $upper = 'ABCDEF';
    $numbers = '0123456789';
    $symbols = '*?!-';
    
    // extract configuration flags into variables.
    $use_lower = true;
    $use_upper = true;
    $use_numbers = true;
    $use_sumbols = true;
    
    $chars = '';
    if($use_lower === true) {$chars .= $lower; }
    if($use_upper === true) {$chars .= $upper; }
    if($use_numbers === true) {$chars .= $numbers; }
    if($use_symbols === true) {$chars .= $symbols; }


        return random_string($length, $chars);
    }
    
    echo generate_password(99);

?>