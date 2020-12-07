<?php 

    include('dbConnection.php');

    $data = stripslashes(file_get_contents("php://input"));
    $myData = json_decode($data, true);
    $id = $myData['id'];

    //Deleting Student 

    if (!empty($id)) {
        $sql = "DELETE FROM students WHERE id = {$id}";

        if ($conn->query($sql) == TRUE) {
            // echo "Student Deleted Successfully";
            echo 1;
        }else{
            // echo "Unable to Delete Student";
            echo 0;
        }
    }

 ?>