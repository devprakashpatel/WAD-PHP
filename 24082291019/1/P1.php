<?php
echo "Write a PHP script to display a simple message using echo/print and demonstrate variables and data types using the var_dump() function.<br>";
echo "Name : Dev patel <br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

echo "Hello Dev !<br>";
print "This is a basic PHP program.<br><br>";

$name = "Dev";       
$age = 20;                    
$isStudent = true;     
$colors = array("Red", "Green", "Blue"); 


echo "Name: $name <br>";
echo "Age: $age <br><br>";

echo "<h2>Using var_dump() Function:</h2>";

var_dump($name);
echo "<br><br>";

var_dump($age);
echo "<br><br>";

var_dump($isStudent);
echo "<br><br>";

var_dump($colors);

?>