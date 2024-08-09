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
    <title>Clearline Registration Form</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mt-5">Clearline Registration Form</h2>
                <form id="reg" action="addnew.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="enrolleeid">Enrollee ID</label>
                        <input type="text" id="enrolleeid" name="enrolleeid" class="form-control" placeholder="Enrollee ID" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="passport upload"> Upload Passport</label>
                        <input type="file" id="passport" name="passport" class="form-control" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
