<?php
//include 'DBConfig.php';
//Define your host here.

$HostName = "remotemysql.com";

//Define your database name here.
$DatabaseName = "nGSWY8FyYM";

//Define your database username here.
$HostUser = "nGSWY8FyYM";

//Define your database password here.
$HostPass = "g2u3TwKrwN";
 
// Create connection
$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
 
if ($conn->connect_error) {
 
 die("Connection failed: " . $conn->connect_error);
} 
 
// Creating SQL command to fetch all records from Table.
$sql = "SELECT * FROM pegawai";
 
$result = $conn->query($sql);
 
if ($result->num_rows >0) {
 
 
 while($row[] = $result->fetch_assoc()) {
 
 $item = $row;
 
 $json = json_encode($item);
 
 }
 
} else {
 echo "No Results Found.";
}
 echo $json;
$conn->close();
?>