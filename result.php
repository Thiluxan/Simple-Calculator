<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>
    <div class="calculator-grid">
        <!--<input type="button" value="View" onclick="view()"><br>-->
        <div class="result-grid">
            <span id="num1"><?php echo $_SESSION["num1"]; ?></span>
            <span id="symbol"><?php echo $_SESSION["symbol"]; ?></span>
            <span id="num2"><?php echo $_SESSION["num2"]; ?></span><br>
            <span id="equal">=</span>
            <span id="answer"<?php echo $_SESSION["total"]; ?>></span>
        </div>
        <br><br><br>
        <a href="calculator.php">Back to Calculator</a>
    </div>
</body>
</html>