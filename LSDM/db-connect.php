<!doctype html>

<?php
$servername = "database-cyber.chsvbmziubkt.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "cyberdata";
$dbname = "database-cyber";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "<h1>CONNECTED</h1>";
//
//$sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//  // output data of each row
//  while($row = $result->fetch_assoc()) {
//    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//  }
//} else {
//  echo "0 results";
//}
$conn->close();
?>
