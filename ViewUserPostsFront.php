<html>
<body>
<form action='ViewUsersPosts.php' method="POST">
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
echo '<select name="user_id">';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<option value='".$row['user_id']."'> ".$row['user_id']."</option>";
}
echo '</select>';
} else {
    echo "0 results";
}
$conn->close();

?>
<input type='submit' value='go'>
</form>
</body>
</html>
