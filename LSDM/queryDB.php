<?php
// DB connection parameters
$servername = $_ENV["MYSQLHOST"];
$port = $_ENV["MYSQLPORT"];
$username = $_ENV["MYSQLUSER"];
$password = $_ENV["MYSQLPASSWORD"];
$dbname = $_ENV["MYSQLDATABASE"];
// Create new mysql connection
$dblink = new mysqli( $hostname, $username, $password, $db, $port); //make the connection to the db
$top10sql = "Select * from Tweets ORDER BY auto_id DESC LIMIT 10";
$top10queryresults = $dblink->query( $top10sql )or die( "<p>Something went wrong with: $top10sql<br>". $dblink->error ); //execute the above query or call the error class with dblink
echo '<p>fetched results</p>';
while ( $socialdata = $top10queryresults->fetch_array( MYSQLI_ASSOC ) ) { //grab all from array and give it as an associative array
  echo '<p>in while loop</p>';
  echo '<tr>';
  echo '<td>' . $socialdata['username'] . '</td>';
  echo '<td>' . $socialdata['text'] . '</td>';
  echo '<td>' . $socialdata['time_posted'] . '</td>';
  echo '<td>' . $socialdata['cyberbullying_category'] . '</td>';
  echo '</tr>';
}
?>

