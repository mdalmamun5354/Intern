<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Add Form</h2>

    <?php
    include 'db_connect.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    if ($firstname && !empty($lastname) && !empty($email)){
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

        if (mysqli_query($conn, $sql)) {
            echo "<p class='text-success'>New record created successfully</p>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }else{
        echo "<p class='text-danger'>Please Fill the full form</p>";
    }
    ?>

    <form action="add.php" method="post">
        <div class="form-group">
            <label for="first name">First Name:</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname">
        </div>
        <div class="form-group">
            <label for="last name name">Last Name:</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>