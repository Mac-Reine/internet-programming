<?php
// Database connection configuration
$servername = "localhost";
$username = "blablaadmin";
$password = "bla123bla456";
$database = "internet_hw";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    // Insert the data into the database
    $sql = "INSERT INTO employee_registration (id, name, email, password, position, salary)
            VALUES ('$id', '$name', '$email', '$password', '$position', '$salary')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>