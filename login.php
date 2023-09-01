<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // In a real application, you would validate the username and password,
    // and potentially check against a database for authentication.
    
    // For simplicity, let's assume a hardcoded username and password.
    $validUsername = "admin";
    $validPassword = "password";

    if ($username === $validUsername && $password === $validPassword) {
        // Successful login, redirect to a secure page or display a success message.
        echo "Login Successful!";
    } else {
        // Invalid credentials, display an error message.
        echo "Invalid username or password.";
    }
}
?>
