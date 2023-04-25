<?php
// DB connection parameters
$servername = $_ENV["MYSQLHOST"];
$port = $_ENV["MYSQLPORT"];
$username = $_ENV["MYSQLUSER"];
$password = $_ENV["MYSQLPASSWORD"];
$dbname = $_ENV["MYSQLDATABASE"];
// Create new mysql connection
$dblink = new mysqli( $hostname, $username, $password, $db ); //make the connection to the db
$sql = "Select top 10 * from Tweets";
$dbqueryresults = $dblink->query( $sql )or die( "<p>Something went wrong with: $sql<br>". $dblink->error ); //execute the above query or call the error class with dblink

while ( $socialdata = $dbqueryresults->fetch_array( MYSQLI_ASSOC ) ) { //grab all from array and give it as an associative array
  echo '<tr>';
  echo '<td>' . $socialdata['username'] . '</td>';
  echo '<td>' . $socialdata['text'] . '</td>';
  echo '<td>' . $socialdata['time_posted'] . '</td>';
  echo '<td>' . $socialdata['cyberbullying_category'] . '</td>';
  echo '</tr>';
}
?>

