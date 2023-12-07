<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiply & devide</title>
</head>
<body>
    <h2>Multiply and Dividevice</h2>

    <?php 
    $number1 = $number2 = $resultsMultyply = $resultsDevide = "";

    //check if form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $number1 = test_input($_POST["number1"]);
        $number2 = test_input($_POST["number2"]);

        //perform multlication and division
        $resultsMultyply = $number1 * $number2;

        if($number2 != 0){
            $resultsDevide = $number1 / $number2;
        } else{
            $resultsDevide = "Cannot";
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }    
    ?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Number 1: <input type="text" name="number1" value="<?php echo $number1;?>">
    <br><br>
    Number 2: <input type="text" name="number1" value="<?php echo $number2;?>">
    <br><br>
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
//dispay results if available
if($resultsDevide !=="" || $resultsMultyply !==""){
    echo "<h4>Results</h4>";
    echo "Multiplication: $resultMultiply<br>";
    echo "Division: $resultDevide";
}
?>

</body>
</html>