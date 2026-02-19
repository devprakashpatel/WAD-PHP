<?php
echo "Write a PHP script using a for loop to generate number patterns or multiplication tables.<br>";
echo "Name : dev patel <br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

echo "Number Pattern:<br>";

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
?>
