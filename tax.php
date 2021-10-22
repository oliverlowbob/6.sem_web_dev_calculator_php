<?php
    $taxAmountOut = "Tax Amount: 0";
    $finalAmountOut = "Final amount: 0";

    function CalculateTax()
    {
        $tax = $_POST['inpTax'];

        $taxPerc = $tax/100;

        $monetary = $_POST['inpMonetary'];

        $taxPayed = $monetary*$taxPerc;

        $GLOBALS['finalAmountOut'] = "Final Amount: " . strval(($monetary-$taxPayed));

        $GLOBALS['taxAmountOut'] = "Tax Amount: " .  strval($tax) . "%";
    }

    if(array_key_exists('btnCalculate', $_POST)){
        CalculateTax();
    }
?>