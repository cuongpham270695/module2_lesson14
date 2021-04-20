<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if(preg_match($regexp,$str)){
        echo "String's first character is uppercase!";
    }else{
        echo "String's first character is not uppercase!";
    }
}
$str1 = isFirstLetterUpperCase("CodeGym");
echo "<br>";
$str2 = isFirstLetterUpperCase("codeGym");