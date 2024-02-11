<?php

$vatRate = 15; 

function calculateVAT($amount, $vatRate) {
    $vat = ($amount * $vatRate) / 100;
    return $vat;
}

$amount = 500; 

$vatAmount = calculateVAT($amount, $vatRate);

echo "The VAT for the amount $" . $amount . " is $" . $vatAmount;

?>