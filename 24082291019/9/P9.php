<?php
echo "Write a PHP script to create and display indexed arrays and perform basic array operations.<br>";
echo "Name : dev patel <br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

$numbers = array(10, 20, 30, 40);

echo "First Element: " . $numbers[0] . "<br>";

array_push($numbers, 50);

foreach($numbers as $num) {
    echo $num . "<br>";
}
?>