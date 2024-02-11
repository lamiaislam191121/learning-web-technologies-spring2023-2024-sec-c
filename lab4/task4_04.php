<?php

function Largest_num($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } else if ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}
$num1 = 9;
$num2 = 8;
$num3 = 19;
$largest = Largest_num($num1, $num2, $num3);

echo "Largest number among $num1, $num2 and $num3 is $largest";

?>