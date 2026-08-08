<!DOCTYPE html>
<html>
<head>
    <title>Array in PHP</title>
</head>
<body>

<h2>Store and Display Array Values</h2>

<?php
$fruits = array("Apple", "Banana", "Mango", "Orange");

echo "<h3>Using Loop:</h3>";

foreach($fruits as $value) {
    echo $value . "<br>";
}

echo "<h3>Using print_r:</h3>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
?>

</body>
</html>
