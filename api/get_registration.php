<?php
include_once '../secure/dbconn.php';
$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the connection
$conn->close();

// Output the data in JSON format
echo json_encode($data);
?>