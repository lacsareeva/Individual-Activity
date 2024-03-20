
<?php
$temperature = 25;
$unit = "C"; // C or F

if ($unit =="C") {

$fahrenheit = ($temperature * 9/5) + 32;
echo "$temperature"C is equal to $fahrenheit°F";
}
else if ($unit == "F") (
$celsius = ($fahrenheit - 32) * 5/9;
echo "Sfahrenheit°F is equal to $celsius"C";
}
else
echo "Invalid unit";
?>