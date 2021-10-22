$("#btnCalculate").click(function(e) {
    e.preventDefault();

    const tax = document.getElementById("inpTax").value;

    const taxPerc = tax/100;

    const monetary = document.getElementById("inpMonetary").value;

    const taxPayed = monetary*taxPerc;

    const finalAmount = monetary-taxPayed;

    $("#pTaxAmount").text("Tax Amount: " +  tax + "%");

    $("#pFinalAmount").text("Final amount: " + finalAmount);
});

$("#btnCalculateTemp").on("click", function(e){
    e.preventDefault();

    const temp = parseInt($("#inpTemp").val());

    const from = $("#tempSelectFrom").val();

    const to = $("#tempSelectTo").val();

    if(from == "fahrenheitFrom" && to == "celsiusTo"){
        $("#outTemp").text(((temp-32)/1.8).toString());
    }
    if(from == "fahrenheitFrom" && to == "kelvinTo"){
        $("#outTemp").text(((temp-32)*5/9+273.15).toString());
    }
    if(from == "celsiusFrom" && to == "kelvinTo"){
        $("#outTemp").text((temp+273.15).toString());
    }
    if(from == "celsiusFrom" && to == "fahrenheitTo"){
        $("#outTemp").text(((temp*1.8)+32).toString());
    }
    if(from == "kelvinFrom" && to == "fahrenheitTo"){
        $("#outTemp").text(((temp - 273.15) * 9/5 + 32).toString());
    }
    if(from == "kelvinFrom" && to == "celsiusTo") {
        $("#outTemp").text((temp-273.15).toString());
    }
});