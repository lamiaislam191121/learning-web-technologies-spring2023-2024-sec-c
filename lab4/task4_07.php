<?php

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
echo "\n";

$number = 1;

for ($row = 3; $row > 0; $row--) {
    for ($col = 0; $col < $row; $col++) {
        echo $number . " ";
        $number++;
    }
    echo "\n"; 
    $number = 1; 
}
echo "\n";

$letter = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letter++ . " ";
    }
    echo "\n";
}

?>