<?php
echo "Write a PHP program that accepts user input through a form and displays it on a webpage. Demonstrate how malicious scripts can be injected through user input and executed in the browser. Implement input sanitization techniques such as htmlspecialchars() to prevent Cross-Site Scripting attacks.
<br>";
echo "Name : Dev patel <br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    // Safe output
    $safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

    echo "Hello " . $safe_name;
}
?>

<form method="post">
    Enter Name: <input type="text" name="name">
    <button name="submit">Submit</button>
</form>

