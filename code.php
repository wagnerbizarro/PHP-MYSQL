<?php
include_once("mysqli_connect.php");

//SELECT
function select($conn) {
$sql = "SELECT id, name, email, age FROM user";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: "  . $row["id"]. " - Name: " . $row["name"]. " - Email: " .$row["email"]. "- Age: " .$row["age"]."\n"; 
    }  
} else {
    echo "0 results"."\n";
}
$conn->close();
}

//INSERT
function insert($conn){
$sql = "INSERT INTO user(name,email,age) VALUES('Wagner','wagner@wagner.com','33')";
if($conn->query($sql) === TRUE) {
    echo "new record created successfully"."\n";
} else {
    echo "Error: " .$sql . "\n" . $conn->error;
}
$conn->close();
}

//UPDATE
function update($conn){
$sql = "UPDATE user SET email='wagner@gmail.com' WHERE id=1";
if($conn->query($sql) === TRUE) {
    echo "Record update successfully"."\n";
} else {
    echo "Error: " .$sql . "\n" . $conn->error;
}
$conn->close();
}

//DELETE
function delete($conn){
$sql = "DELETE FROM user WHERE id=1";

if($conn->query($sql) === TRUE) {
    echo "Record delete successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
}


//insert($conn);
//select($conn);
//update($conn);
//delete($conn);
?>