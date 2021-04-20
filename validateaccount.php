<?php
function validateAccount($str){
    $regexp = "/^[_a-z0-9]{6,}$/";
    if(preg_match($regexp,$str)){
        echo "Welcome to website";
    }else {
        echo "Account is not valid!";
    }
}
$acc = "______";
validateAccount($acc);