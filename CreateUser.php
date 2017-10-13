<?php


$user_id = $_POST['user_id'];
echo $user_id;


#Connect to database
$servername = "mysql.eecs.ku.edu:3306";
$username = "jweber";
$password = 'P@$$word123';
$db = "jweber";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Users WHERE user_id ='".$user_id."'";
$result = $conn->query($sql);

if ($result->num_rows <= 0 && $user_id != '') {
    $sql = "INSERT INTO Users (user_id) VALUES ('".$user_id."')";
    if($conn->query($sql) === TRUE){
        echo "Success";
    }
}
else{
    echo 'User already exists or not enough info.';
}
$conn->close();


?>
