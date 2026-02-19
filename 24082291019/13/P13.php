<?php
echo "Write a PHP script to demonstrate inheritance and method overriding in PHP.<br>";
echo "Name : dev patel <br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

class Parentclass {
    public function message() {
        echo "This is Parent Class<br>";
    }
}

class Child extends Parentclass {
    public function message() {
        echo "This is Child Class (Overridden Method)<br>";
    }
}

$obj = new Parentclass();
$obj->message();
$obj = new Child();
$obj->message();
?>