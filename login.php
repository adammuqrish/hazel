<?php
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "hazel";

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check if the user exists
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Password is correct, start a session
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("location: index.php"); // Redirect to a welcome page
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Username not found.";
    }

    $conn->close();
}
?>