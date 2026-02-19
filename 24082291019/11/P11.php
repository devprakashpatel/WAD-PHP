<?php
echo "Write a PHP script to demonstrate the concept of class and object in PHP.<br>";
echo "Name : dev patel <br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

class Student {
    public $name;
    public $age;

    public function display() {
        echo "Name: $this->name Age: $this->age";
    }
}

$s1 = new Student();
$s1->name = "dev<br>";
$s1->age = 20;
$s1->display();
?>