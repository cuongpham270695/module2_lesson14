<?php
function validateEmail($str){
    $regexp = '/^[A-Za-z0-9.]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if(preg_match($regexp,$str)){
        echo "Email is valid!";
    }else {
        echo "Email is not valid!";
    }
}
$email = validateEmail("abc@gmail.com");