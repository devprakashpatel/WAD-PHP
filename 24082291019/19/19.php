<?php
echo "Write a PHP script to demonstrate Cookie Management in PHP including creating cookies, accessing cookie values, checking cookie existence, modifying cookies, and deleting cookies.
<br>";
echo "Name : Dev patel <br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

setcookie("user", "dev", time() + 3600);

if (isset($_COOKIE["user"])) {
    echo "User: " . $_COOKIE["user"] . "<br>";
}

if (isset($_COOKIE["user"])) {
    echo "Cookie exists.<br>";
}

setcookie("user", "Developer", time() + 3600);
echo "Cookie modified.<br>";

setcookie("user", "", time() - 3600);
echo "Cookie deleted.";
?>