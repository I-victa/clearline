<?php
include_once 'secure/dbconn.php';

if(isset($_POST["submit"])){
    // Collect form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $enrolleeid = $_POST['enrolleeid'];

    // File upload
    $targetdir = 'uploads/';
    $targetpath = '/uploads/';
    $imagefiletype = strtolower(pathinfo($_FILES["passport"]["name"], PATHINFO_EXTENSION));
    $targetfile = $targetdir . basename($_FILES["passport"]["name"]);
    $uploadok = 1;

    // Check if file type is supported
    if($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg"){
        echo "File type not supported";
        $uploadok = 0;
    }

    // Check if file was not uploaded
    if($uploadok == 0){
        echo "File was not uploaded";
    } else {
        // Try to move the uploaded file
        if (move_uploaded_file($_FILES["passport"]["tmp_name"], $targetfile)) {
            // Create passport link
            $passportlink = "https://visuretech.com/clearline/" . $targetfile;

            // Data submission
            $sql = "INSERT INTO registration (firstname, lastname, email, enrolleeid, passportlink) VALUES ('$firstname', '$lastname', '$email', '$enrolleeid', '$passportlink')";

            if ($conn->query($sql) === TRUE) {
                header("Location: index.php?registration_successful");
                exit();
            } else {
                echo "Error: " . $sql . $conn->error;
                header("Location: index.php?registration_failed");
            }
        } else {
            echo "There was an issue uploading passport";
        }
    }
    $conn->close();
}
?>
