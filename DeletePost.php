<?php
$postlist = $_POST['boxes'];
$servername = "mysql.eecs.ku.edu";
$username = "jweber";
$password = 'P@$$word123';
$dbname = "jweber";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
foreach(array($postlist) as $post)
{
$sql = "DELETE FROM Posts WHERE post_id='".$post."'";
$conn->query($sql);
}
echo 'Query Completed';
$conn->close();

?>
