<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db_name = "db_admin";

$conn = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

$mentee_id = $_SESSION['email'];

// Retrieve all records for the current mentee from the videoprogress table
$query = "SELECT * FROM videoprogress WHERE mentee = '$mentee_id'";
$result = mysqli_query($conn, $query);

if ($result) {
    $response = array();
    while ($row = mysqli_fetch_assoc($result)) {
        // Add each row to the response array
        $response[] = $row;
    }

    // Set the appropriate Content-Type header for JSON response
    header('Content-Type: application/json');

    // Encode the response array as JSON and send it to the client
    echo json_encode($response);
} else {
    // Query execution error
    $response = array(
        'error' => 'Error executing query: ' . mysqli_error($conn)
    );

    // Set the appropriate Content-Type header for JSON response
    header('Content-Type: application/json');

    // Encode the response array as JSON and send it to the client
    echo json_encode($response);
}

// Close the database connection
mysqli_close($conn);
?>
