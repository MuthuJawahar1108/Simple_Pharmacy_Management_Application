<?php
    include("connection.php");

    /*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // parse_str(file_get_contents("php://input"), $data);
        $id = $data['id'];
    
        $sql = "DELETE FROM medicines WHERE id = $id";
    
        if ($conn->query($sql) === TRUE) {
            echo "hi";
            echo json_encode(array("success" => "Row deleted successfully"));
        } else {
            echo json_encode(array("error" => "Error deleting row: " . $conn->error));
        }
    } else {
        echo json_encode(array("error" => "Invalid request"));
    }*/

    


    
    $row_id = $_POST['row_id'];
    
    // Initialize the response array
    $response = array();
    
    // Delete the medicine from the database
    $sql = "DELETE FROM medicines WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        // Bind parameters and execute the statement
        $stmt->bind_param("i", $row_id);
        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = "Medicine deleted successfully.";
        } else {
            $response['success'] = false;
            $response['error'] = "Error deleting medicine: " . $stmt->error;
        }
    } else {
        $response['success'] = false;
        $response['error'] = "Database statement preparation failed: " . $conn->error;
    }
    
    // Send the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    
    
    
    


?>