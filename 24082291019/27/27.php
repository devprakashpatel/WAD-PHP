<?php
echo "Write a PHP program that performs a sensitive operation such as changing a user password and demonstrate how an attacker can trigger the request without the user's consent. Implement CSRF protection using a security token to prevent unauthorized requests.
<br>";
echo "Name : Dev patel <br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

echo "This is vulnerable to CSRF attack <br><br>";

session_start();

if (isset($_POST['change'])) {
    $new_pass = $_POST['password'];

    // Simulate password change
    echo "Password changed to: " . $new_pass;
}
?>

<form method="post">
    New Password: <input type="text" name="password">
    <button name="change">Change Password</button>
</form>

