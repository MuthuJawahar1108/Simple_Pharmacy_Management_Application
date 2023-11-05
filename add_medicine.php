<?php
    // session_start();
    
    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        include("connection.php");

         // Retrieve data from the form
        $med_name = $_POST["med_name"];
        $comp_name = $_POST["comp_name"];
        $cpu = $_POST["cpu"];
        $qty = $_POST["qty"];
        $type = $_POST["type"];

        // Insert data into the database
        $insert_sql = "INSERT INTO medicines (name, compname, price, stock, type) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_sql);

         // Bind parameters and execute the statement
        $stmt->bind_param("ssdis", $med_name, $comp_name, $cpu, $qty, $type);
        $success = $stmt->execute();

        if ($success) {
            // Get the ID of the newly inserted record
            $new_id = $stmt->insert_id;
            
            // Return the newly added record as JSON
            $response = [
                "success" => true,
                "id" => $new_id,
                "name" => $med_name,
                "compname" => $comp_name,
                "price" => $cpu,
                "stock" => $qty,
                "type" => $type
            ];
            echo json_encode($response);
        } else {
            $error = "Error: " . $stmt->error;
            echo json_encode(["success" => false, "error" => $error]);
        }
    }

?>


