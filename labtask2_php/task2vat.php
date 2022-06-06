<?php
function vat($amount)
{
    $vat = $amount *(15/100);
    $total = $vat + $amount;
    return $total;
}

$amount = 500;
echo ("Total amount is = ");
echo(vat($amount));

?>