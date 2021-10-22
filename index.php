<?php require_once 'tax.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    </style>
    <!-- <script src="js/script.js" defer></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script> -->
</head>
<body>
    <header id="main">
        <h1>Exercises</h1>
    </header>
    <main>
        <div id="calculator">
            <h2>Calculator</h2>
            <form method="post">
                <div>
                    <span class="field">Monetary Amount:</span></br>
                    <input type="number" min="0" value=0 name="inpMonetary" id="inpMonetary">
                </div>
                <div>
                    <span class="field">Tax percentage:</span></br>
                    <input type="number" min="0" max="100" value=0 name="inpTax" id="inpTax">
                </div>
                <div>
                    <input type="submit" id="btnCalculate" name="btnCalculate" value="Calculate" /><br>
                </div>
            </form>
            <div id="mainText">
                <p><?php echo $GLOBALS['taxAmountOut'] ?></p>
                <p><?php echo $GLOBALS['finalAmountOut'] ?></p>
            </div>
        </div>
        <div id="temperature">
            <h2>Temperature Converter</h2>
            <div>
                <span class="field">Convert:</span></br>
                <input type="number" value=0 id="inpTemp">       
            </div>
            <div>
                <label>From: </label>
                <select id="tempSelectFrom" name="temperature">
                    <option value="fahrenheitFrom">Fahrenheit</option>
                    <option value="celsiusFrom">Celsius</option>
                    <option value="kelvinFrom">Kelvin</option>
                  </select>
                  <br>
                  <label>To: </label>
                  <select id="tempSelectTo" name="temperature">
                      <option value="fahrenheitTo">Fahrenheit</option>
                      <option value="celsiusTo">Celsius</option>
                      <option value="kelvinTo">Kelvin</option>
                    </select>
            </div>
            <div>
                <button id="btnCalculateTemp">Calculate</button>
            </div>
            <div id="outTemp"></div>
        </div>
    </main>
    <footer>
        &copy; 2021 Oliver Dehnfjeld
    </footer>
</body>
</html>