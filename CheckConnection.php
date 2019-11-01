<?php
include 'DBConfig.php';
 
// Create connection
$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
 echo 'Connected.';

if ($conn->connect_error) {
 
 die("Connection failed: " . $conn->connect_error);
} 
echo 'Connected.';

$conn->close();
?>