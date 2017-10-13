<html>
<body>
<?php
$user_id = $_POST['user_id'];
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

$sql = "SELECT * from Posts WHERE author_id='$user_id'";
echo "Posts for $user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<p> ".$row['content']." </p>";
}
} else {
    echo "0 results";
}
$conn->close();

?>
</body>
</html>
