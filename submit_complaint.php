<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];

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

    // Prepare and execute the SQL query to insert the data into the database
    $sql = "INSERT INTO issues (name, email, issue) VALUES ('$name', '$email', '$issue')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully, redirect to the desired page
        header("Location: subissue.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
