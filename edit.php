<?php
    include('dbConnection.php');

    // When you click Edit button below code get executed 
    $data = stripslashes(file_get_contents("php://input"));
    $myData = json_decode($data, true);
    $id = $myData['id'];

    // Retrieve Specific Student information
    $sql = "SELECT * FROM students WHERE id = {$id}";


    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // Returning JSON Format Data as Response to AJAX Call
    echo json_encode($row);

?>