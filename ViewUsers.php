<?php

$servername = "mysql.eecs.ku.edu";
$username = "jweber";
$password = 'P@$$word123';
$dbname = "jweber";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname)
;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from Users";
$result = $conn->query($sql);
echo '<h1> Users </h1>';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<p> ".$row['user_id']."</p>";
}
} else {
    echo "0 results";
}
$conn->close();

?>
