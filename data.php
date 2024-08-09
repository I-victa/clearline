<?php

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($url, 'registration_successful') !== false) {
    echo '<script>
        setTimeout(function() {
            swal({
                title: "Success!",
                text: "User Added",
                type: "success"
            }, function() {
                window.location = "#0";
            });
        }, 1000);
    </script>';
} elseif (strpos($url, 'registration_failed') !== false) {
    echo '<script>
        setTimeout(function() {
            swal({
                title: "Error!",
                text: "Registration Failed",
                type: "error"
            }, function() {
                window.location = "#0";
            });
        }, 1000);
    </script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clearline Data Page</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Ensure jQuery is included -->
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Registration Data</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Select</th>
                        <th>SN</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Enrollee ID</th>
                        <th>PICS</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once 'secure/dbconn.php';

                    $sql = "SELECT * FROM `registration` ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $serial = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td><input type='checkbox' name='select[]' value='" . $row['id'] . "'></td>";
                            echo "<td>" . $serial . "</td>";
                            echo "<td>" . $row['firstname'] . "</td>";
                            echo "<td>" . $row['lastname'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['enrolleeid'] . "</td>";
                            echo "<td><img src='" . $row['passportlink'] . "' alt='Image' style='max-width: 60px; max-height: 60px;'></td>";
                            echo "<td>";
                            echo "<button class='btn btn-danger' onclick='deleteitem(" . $row['id'] . ")'><i class='fa fa-trash'></i> Delete</button>";
                            echo "</td>";
                            echo "</tr>";
                            $serial++;
                        }
                    } else {
                        echo "<tr><td colspan='8' class='text-center'>No Data currently</td></tr>";
                    }

                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
    function deleteitem(id) {
        if (confirm('Are you sure you want to delete this user?')) {
            $.ajax({
                url: 'delete.php',
                type: 'POST',
                dataType: 'json',
                data: { id: id },
                success: function(response) {
                    if (response.success) {
                        alert('Item deleted successfully.');
                        location.reload();
                    } else {
                        alert('Failed to delete the item.');
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred: ' + error);
                }
            });
        }
    }
    </script>

</body>
</html>
