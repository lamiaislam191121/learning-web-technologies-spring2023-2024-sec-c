<?php
function search_element($array, $find_element) {
    foreach ($array as $element) {
        if ($element === $find_element) {
            return true;
        }
    } 
    return false;
}
$array = [2,4,5,6,7,3,8,9,10];

$find_element= 8;

$element_found = search_element($array, $find_element);

if ($element_found) {
    echo $find_element . " was found ";
} else {
    echo $find_element . " was not found ";
}

?>