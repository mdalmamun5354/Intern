<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data_Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--    <style>-->
<!--        .btn {-->
<!--            margin-inline: 18px;-->
<!--        }-->
<!--    </style>-->
</head>
<body>

<div class="container">

    <h2>Data List</h2>
    <a href="add.php" class="btn btn-primary">Add new record</a>

    <?php
    include 'db_connect.php';

    $sql = "SELECT id, firstname, lastname, email FROM MyGuests";
    $result = $conn->query($sql);
    ?>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row"><?php echo htmlspecialchars($row["id"]); ?></th>
                    <td><?php echo htmlspecialchars($row["firstname"]); ?></td>
                    <td><?php echo htmlspecialchars($row["lastname"]); ?></td>
                    <td><?php echo htmlspecialchars($row["email"]); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </td>
<!--                    <td>-->
<!--                        <a href="edit.php?id=--><?php //echo $row['id']; ?><!--" class="btn btn-success">Edit</a>-->
<!--                        <a href="delete.php?id=--><?php //echo $row['id']; ?><!--" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>-->
<!--                    </td>-->
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='5'>No results found</td></tr>";
        }
        $conn->close();
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
