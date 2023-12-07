<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Checker</title>
</head>
<body>

<h2>Student Grade Checker</h2>

<?php
// Define variables to store user input and result
$examType = $totalMarks = $result = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and get input values
    $examType = test_input($_POST["examType"]);
    $totalMarks = test_input($_POST["totalMarks"]);

    // Check grade based on conditions
    $result = checkGrade($examType, $totalMarks);
}

// Function to check the student's grade
function checkGrade($examType, $totalMarks) {
    if ($examType == "Final-exam" && $totalMarks >= 90) {
        return true;
    } elseif ($totalMarks >= 89 && $totalMarks <= 100) {
        return true;
    } else {
        return false;
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
    Exam Type:
    <select name="examType">
        <option value="Regular-exam">Regular Exam</option>
        <option value="Final-exam">Final Exam</option>
    </select>
    <br><br>
    Total Marks: <input type="text" name="totalMarks" value="<?php echo $totalMarks;?>">
    <br><br>
    <input type="submit" name="submit" value="Check Grade">
</form>

<?php
// Display result if available
if ($result !== "") {
    echo "<h3>Result:</h3>";
    echo "The student receives an A+ grade: " . ($result ? 'true' : 'false');
}
?>

</body>
</html>
