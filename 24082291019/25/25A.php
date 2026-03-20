<?php
echo "Write a PHP program to create a simple login system connected to a MySQL database and demonstrate how SQL Injection can bypass authentication when user input is not properly validated. Apply secure coding techniques such as prepared statements to prevent SQL Injection.
<br>";
echo "Name : Dev patel <br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

echo"sql Injection prevent<br>";

$conn = new mysqli("localhost", "root", "", "test");

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    // Secure query
    $stmt = $conn->prepare("SELECT * FROM userss WHERE username=? AND password=?");
    $stmt->bind_param("ss", $u, $p);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0)
        echo "Login Successful";
    else
        echo "Invalid Login";
}
?>

<form method="post">
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<button name="login">Login</button>
</form>