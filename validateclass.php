<?php
function validateNameOfClass($str)
{
    $regexp = '/^[C|A|P][0-9]{4}[G-M]$/';
    if (preg_match($regexp, $str)) {
        echo "It's a name of class";
    } else {
        echo "It's not a class name";
    }
}
validateNameOfClass("C0318K");