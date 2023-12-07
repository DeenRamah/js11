<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>

<h2>Temperature Converter</h2>

<?php
// Define variables to store user input and results
$temperature = $convertedTemperature = $conversionType = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and get input values
    $temperature = test_input($_POST["temperature"]);
    $conversionType = $_POST["conversionType"];

    // Perform temperature conversion
    if ($conversionType == "celsiusToFahrenheit") {
        $convertedTemperature = celsiusToFahrenheit($temperature);
    } elseif ($conversionType == "fahrenheitToCelsius") {
        $convertedTemperature = fahrenheitToCelsius($temperature);
    }
}

// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// Function to convert Fahrenheit to Celsius
function fahrenheitToCelsius($fahrenheit) {
    return ($fahrenheit - 32) * 5/9;
}

// Function to validate user input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Temperature: <input type="text" name="temperature" value="<?php echo $temperature;?>">
    <br><br>
    Conversion Type:
    <select name="conversionType">
        <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
        <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Convert">
</form>

<?php
// Display results if available
if ($convertedTemperature !== "") {
    echo "<h3>Result:</h3>";
    echo "$temperature degrees ";
    echo ($conversionType == "celsiusToFahrenheit") ? "Celsius is equal to " : "Fahrenheit is equal to ";
    echo "$convertedTemperature degrees ";
    echo ($conversionType == "celsiusToFahrenheit") ? "Fahrenheit." : "Celsius.";
}
?>

</body>
</html>
