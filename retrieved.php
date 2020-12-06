<?php
    include('dbConnection.php');

    //retrieved student information 

    $sql = "SELECT * FROM students";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $data = array();
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
    }


    // Return JSON Format Data as Response to AJAX Call
    echo json_encode($data);

?>