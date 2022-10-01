<?php
 include "connect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        
        $sql = "INSERT INTO logins(fname, lname)
        VALUES('$fname','$lname')";	
        
    if(mysqli_query($link,$sql)){
            $last_id = $link->insert_id;
            echo json_encode(['id'=>$last_id]);
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
        mysqli_close($link);
?>