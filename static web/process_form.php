<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "final_project"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert form data into the database
    $stmt = $conn->prepare("INSERT INTO Registration (name, gender, age, relation, email) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $name, $gender, $age, $relation, $email);

    // Get form data
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['Age'];
    $relation = $_POST['Relation'];
    $email = $_POST['email'];

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Redirect to thank you page
        header("Location: Thank.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $conn->close();
}
?>
