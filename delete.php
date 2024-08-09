<?php
include_once 'secure/dbconn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $sql = "DELETE FROM `registration` WHERE `id` = $id";
    
    if (mysqli_query($conn, $sql)){
        echo json_encode(['success' => true]);
    }else{
     echo json_encode(['success' => false, 'message'=> 'Failed to delete user']);   
    }
    mysqli_close ($conn);
}
?>