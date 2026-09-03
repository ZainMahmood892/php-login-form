<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // In a real application, you would add database connection logic here
    // Example: password_hash($password, PASSWORD_DEFAULT) for security

    echo "<div style='text-align: center; margin-top: 50px; font-family: sans-serif;'>";
    echo "<h1>Registration Successful!</h1>";
    echo "<p><strong>Username:</strong> $username</p>
    <p><strong>Email:</strong> $email</p>";
    echo "<a href='index.php'>Go back to form</a>";
    echo "</div>";
} else {
    header("Location: index.php");
    exit();
}
?>