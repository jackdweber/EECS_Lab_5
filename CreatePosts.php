<?php


$body = $_POST['body'];
$user_id = $_POST['user_id'];


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

if ($result->num_rows > 0 && $body != '') {
    $sql = "INSERT INTO Posts (content, author_id) VALUES ('".$body."', '".$user_id."')";
    if($conn->query($sql) === TRUE){
        echo "Success";
    }
}
else{
    echo 'Not a User or post body empty.';
}
$conn->close();


?>
