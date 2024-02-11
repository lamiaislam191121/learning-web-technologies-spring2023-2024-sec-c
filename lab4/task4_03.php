<?php

function checkOddOrEven($number) {
    if ($number % 2 == 0) {
        echo $number . " is Even";
    } else {
        echo $number . " is Odd";
    }
}
$number = 8;

checkOddOrEven($number);

?>