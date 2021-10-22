<?php
    $taxAmountOut = "Tax Amount: 0";
    $finalAmountOut = "Final amount: 0";
    $outTemp = "";

    function CalculateTax()
    {
        $tax = $_POST['inpTax'];

        $taxPerc = $tax/100;

        $monetary = $_POST['inpMonetary'];

        $taxPayed = $monetary*$taxPerc;

        $GLOBALS['finalAmountOut'] = "Final Amount: " . strval(($monetary-$taxPayed));

        $GLOBALS['taxAmountOut'] = "Tax Amount: " .  strval($tax) . "%";
    }

    function CalculateTemperature()
    {
        $temp = $_POST["inpTemp"];

        $from = $_POST["tempSelectFrom"];
    
        $to = $_POST["tempSelectTo"];

        if($from == "fahrenheitFrom" && $to == "celsiusTo"){
            $GLOBALS["outTemp"] = strval(($temp-32)/1.8);
        }

        if($from == "fahrenheitFrom" && $to == "kelvinTo"){
            $GLOBALS["outTemp"] = strval(($temp-32)*5/9+273.15);
        }
        if($from == "celsiusFrom" && $to == "kelvinTo"){
            $GLOBALS["outTemp"] = strval($temp+273.15);
        }
        if($from == "celsiusFrom" && $to == "fahrenheitTo"){
            $GLOBALS["outTemp"] = strval((($temp*1.8)+32));
        }
        if($from == "kelvinFrom" && $to == "fahrenheitTo"){
            $GLOBALS["outTemp"] = strval(($temp - 273.15) * 9/5 + 32);
        }
        if($from == "kelvinFrom" && $to == "celsiusTo") {
            $GLOBALS["outTemp"] = strval(($temp-273.15));
        }
    }

    if(array_key_exists('btnCalculate', $_POST)){
        CalculateTax();
    }

    if(array_key_exists('btnCalculateTemp', $_POST)){
        CalculateTemperature();
    }
?>