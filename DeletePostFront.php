<html>
<body>
<form action='DeletePost.php' method="POST">
<h1>Delete Posts</h1>
<table>
<thead>
<tr>
<td>User</td>
<td>Post</td>
<td>Delete?</td>
</tr>
</thead>
<tbody>
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

$sql = "SELECT * from Posts";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>".$row['author_id']."</td><td>".$row['content']."</td><td><input type='checkbox' name='boxes' value='".$row['post_id']."'></td></tr>";
}
} else {
    echo "0 results";
}
$conn->close();

?>
</tbody>
</table>
<input type='submit' value='go'>
</form>
</body>
</html>
