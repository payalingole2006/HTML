<!DOCTYPE html><html>
<head>
    <title>String Manipulation in PHP</title>
</head>
<body>
<h2>String Manipulation Program</h2>
<form method="post">
    Enter a string: <input type="text" name="inputString" required>
    <br><br>
    Enter start position for substring: <input type="number" name="start" required>
    <br><br>
    Enter length of substring: <input type="number" name="length" required>
    <br><br>
    <input type="submit" name="submit" value="Process">
</form>
<?php
if(isset($_POST['submit'])) {
    $str = $_POST['inputString'];
    $start = $_POST['start'];
    $len = $_POST['length'];// String Length
$length = strlen($str);

// Reverse String
$reverse = strrev($str);

// Substring
$substring = substr($str, $start, $len);

echo "<h3>Results:</h3>";
echo "Original String: " . $str . "<br>";
echo "Length of String: " . $length . "<br>";
echo "Reversed String: " . $reverse . "<br>";
echo "Substring: " . $substring . "<br>";

}
?>

</body>
</html>
