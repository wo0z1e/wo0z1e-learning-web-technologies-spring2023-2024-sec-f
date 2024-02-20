<?php
$amount = 500;

$vatRate = 15;

$vatAmount = $amount * ($vatRate / 100);

$totalVat = ($amount + $vatAmount);

echo "VAT = " . $totalVat ." tk";
