<?php

$vat_Rate = 15; 

function cal_VAT($amount, $vat_Rate) {
    $vat = ($amount * $vat_Rate) / 100;
    return $vat;
}

$amount = 500; 

$vat_Amount = cal_VAT($amount, $vat_Rate);

echo "The VAT for the amount $" . $amount . " is $" . $vat_Amount;

?>