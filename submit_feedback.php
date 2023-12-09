<?php
// Create a connection to the database
    $servername = "dheepthi.mysql.database.azure.com";
    $username = "cse20217root";
    $password = "Dheepthi@123";
    $dbname = "signup";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the data for insertion
$name = $_POST['name'];
$feedback = $_POST['feedback'];

// Insert the data into the database
$sql = "INSERT INTO reviews (name, feedback) VALUES ('$name', '$feedback')";
if ($conn->query($sql) === true) {
    // Redirect to the "subfeedback.html" page
    header("Location: subfeedback.html");
    exit(); // Important: Terminate the current script after the redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
