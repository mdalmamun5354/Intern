<?php
function connectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}


function insert($data) {
    $conn = connectDB();


    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$data[0]', '$data[1]', '$data[2]')";

    if ($conn->query($sql) === TRUE) {
        echo "Insert new record successfully!\n";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function read($id = -1) {
    $conn = connectDB();

    $condition = $id != -1 ? " WHERE id = " . $id : "";

    $sql = "SELECT * FROM MyGuests" . $condition;

    $result = $conn->query($sql);

    echo "<pre>";
//    print_r($result->fetch_all());
    echo "</pre>";

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<b>id:</b> " . $row["id"]. " - <b>Name:</b> " . $row["firstname"]. " " . $row["lastname"]. " <b>Email:</b> " . $row["email"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

function delete($id) {
    $conn = connectDB();

    $sql = "DELETE FROM MyGuests WHERE id = " . $id;

    if ($conn->query($sql)) {
        echo "Deleted successfully";
    } else {
        echo "Something is wrong";
    }

    $conn->close();
}

function update($id, $fName, $lName, $email) {
    $conn = connectDB();

    $sql = "UPDATE MyGuests SET firstname='$fName', lastname='$lName', email='$email' WHERE id=".$id;

    if ($conn->query($sql)) {
        echo "Updated successfully";
    } else {
        echo "Something is wrong";
    }

    $conn->close();
}



/****************************  CRUD Operation Start *******************************/

//insertion
$guests = [
    ['Md. Al', 'Mamun', 'mamun.dev.pro@gmail.com'],
    ['Md. Mehedi Hasan', 'Munna', 'munnapanna420@gmail.com'],
    ['Md. Shimon', 'Ahmmed', 'simon67@gmail.com'],
    ['Md. Shihab', 'Uddin', 'shihab4545@gmail.com'],
    ['Md. Sharif', 'Rabbi', 'rabbi.web@gmail.com'],
    ['Md. Mohon', 'Sorkar', 'mohon56@gmail.com'],
];
//foreach ($guests as $guest) insert($guest);

// reading
read();

// deletion
//delete(1);

// updating
//update(2, "Md. Mahmudul", "Hassan", "mahmud.cst.dev@gmail.com")

/****************************  CRUD Operation End *******************************/
?> 