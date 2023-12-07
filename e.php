<!DOCTYPE html>
<html>
<head>
    <title>Number Difference Calculator</title>
</head>
<body>

<h2>Number Difference Calculator</h2>

<?php
// Define variable to store user input and result
$number = $difference = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and get input value
    $number = test_input($_POST["number"]);

    // Calculate the difference
    $difference = calculateDifference($number);
}

// Function to calculate the difference
function calculateDifference($number) {
    $baseNumber = 13;

    if ($number > $baseNumber) {
        return 2 * abs($number - $baseNumber);
    } else {
        return $baseNumber - $number;
    }
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
    Enter a number: <input type="text" name="number" value="<?php echo $number;?>">
    <br><br>
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
// Display result if available
if ($difference !== "") {
    echo "<h3>Result:</h3>";
    echo "The difference is: $difference";
}
?>

</body>
</html>
