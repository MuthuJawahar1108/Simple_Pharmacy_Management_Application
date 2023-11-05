<?php
include("connection.php");

$row_id = $_POST['row_id'];

// Initialize the response array
$response = array();

// Fetch data from the database and return it as JSON
$sql = "SELECT * FROM medicines WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Bind parameters and execute the statement
    $stmt->bind_param("i", $row_id);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result) {
        // Fetch the data
        $data = $result->fetch_assoc();
        if ($data) {
            // Data found, send it as a JSON response
            $response['success'] = true;
            $response['data'] = $data;
        } else {
            $response['success'] = false;
            $response['error'] = "No data found for the provided ID.";
        }
    } else {
        $response['success'] = false;
        $response['error'] = "Database query failed: " . $stmt->error;
    }
} else {
    $response['success'] = false;
    $response['error'] = "Database statement preparation failed: " . $conn->error;
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
