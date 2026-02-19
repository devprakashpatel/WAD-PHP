<?php
echo "Write a PHP script to demonstrate decision making in PHP using if–else and switch–case statements.<br>";
echo "Name : Dev patel<br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

$age = 20;

echo "<h2>Using if–else Statement</h2>";

if ($age < 18) {
    echo "You are a minor.<br>";
} elseif ($age >= 18 && $age < 60) {
    echo "You are an adult.<br>";
} else {
    echo "You are a senior citizen.<br>";
}


$day = "Monday";
echo "<h3>Using switch–case Statement</h3>";

switch ($day) {
    case "Monday":
        echo "Start of the work week.<br>";
        break;

    case "Tuesday":
        echo "Second day of the work week.<br>";
        break;

    case "Wednesday":
        echo "Midweek day.<br>";
        break;

    case "Thursday":
        echo "Almost the weekend.<br>";
        break;

    case "Friday":
        echo "Last working day of the week.<br>";
        break;

    case "Saturday":
    case "Sunday":
        echo "It's the weekend!<br>";
        break;

    default:
        echo "Invalid day entered.<br>";
        break;
}

?>
