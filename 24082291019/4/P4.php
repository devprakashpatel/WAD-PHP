<?php
echo "Write a PHP script using switch-case to implement a simple menu-driven or calculator system.<br>";
echo "Name : Dev patel<br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

$num1 = 100;
$num2 = 50;

$choice = 4;

echo "Menu-Driven Calculator:<br>";
echo "1. Addition<br>";
echo "2. Subtraction<br>";
echo "3. Multiplication<br>";
echo "4. Division<br><br>";

switch ($choice) {
    case 1:
        echo "Addition: " . ($num1 + $num2);
        break;

    case 2:
        echo "Subtraction: " . ($num1 - $num2);
        break;

    case 3:
        echo "Multiplication: " . ($num1 * $num2);
        break;

    case 4:
        echo "Division: " . ($num1 / $num2);
        break;

    default:
        echo "Invalid Choice";
}
?>