<?php
function validatePhone($str){
    $regexp = '/^([1-9]{1,4})-0\d{9}$/';
    if(preg_match($regexp,$str)){
        echo "It's phone number";
    }else{
        echo "It's not phone number";
    }
}
validatePhone("84-0962291436");