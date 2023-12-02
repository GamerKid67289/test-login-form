<?php
// Handle login form submission here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["loginUsername"];
    $password = $_POST["loginPassword"];

    // Validate credentials (you would typically check against a database)
    // For demonstration purposes, let's assume a hardcoded user
    $validUsername = "demo_user";
    $validPassword = "demo_password";

    if ($username == $validUsername && $password == $validPassword) {
        echo "Login successful!";
    } else {
        echo "Invalid credentials. Please try again.";
    }
}
?>
