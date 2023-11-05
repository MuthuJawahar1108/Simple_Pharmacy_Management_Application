<?php
    include("connection.php");
    // Fetch data from the database and return it as JSON
    $sql = "SELECT * FROM medicines";
    $result = $conn->query($sql);
    $data = array();


    

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    echo json_encode($data);
?>
