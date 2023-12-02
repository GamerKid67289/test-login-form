<?php
// Handle signup form submission and database insertion here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["signupUsername"];
    $password = $_POST["signupPassword"];

    // Connect to your MySQL database (replace with your database details)
    $dbHost = "your_host";
    $dbName = "your_database";
    $dbUser = "your_username";
    $dbPassword = "your_password";

    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user into the database (you should use prepared statements to prevent SQL injection)
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
