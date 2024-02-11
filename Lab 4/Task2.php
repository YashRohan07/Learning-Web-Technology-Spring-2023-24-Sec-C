<?php
function calculateVAT($amount) {
    $vatRate = 0.15;
    return $amount * $vatRate;
}

$amount = 100;
$vat = calculateVAT($amount);

echo "Amount: $amount\n";
echo "VAT (15%): $vat\n";
?>
