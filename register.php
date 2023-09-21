<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $db_host = "localhost"; // Replace with your database host
    $db_user = "root"; // Replace with your database username
    $db_pass = ""; // Replace with your database password
    $db_name = "hazel"; // Replace with your database name

    // Create a database connection
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user input from the form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // Retrieve the password as plain text

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database, using the hashed password
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password); // Use the hashed password
    $stmt->execute();
    $stmt->close();

    // Close the database connection
    $conn->close();

    // Redirect to a thank you or login page
    header("Location: login.html"); // Replace with the desired page
    exit();
}
?>
