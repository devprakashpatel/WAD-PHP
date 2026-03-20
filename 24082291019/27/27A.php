<?php
echo "Write a PHP program that performs a sensitive operation such as changing a user password and demonstrate how an attacker can trigger the request without the user's consent. Implement CSRF protection using a security token to prevent unauthorized requests.
<br>";
echo "Name : Dev patel <br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";


echo "This is protection to CSRF attack <br><br>";

session_start();

// Generate token
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

if (isset($_POST['change'])) {
    // Verify token
    if ($_POST['token'] === $_SESSION['token']) {
        $new_pass = $_POST['password'];
        echo "Password changed to: " . $new_pass;
    } else {
        echo "Invalid CSRF Token!";
    }
}
?>

<form method="post">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    New Password: <input type="text" name="password">
    <button name="change">Change Password</button>
</form>