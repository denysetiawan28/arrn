<?php
 
// Importing DBConfig.php file.
//include 'DBConfig.php';
$HostName = "remotemysql.com";

//Define your database name here.
$DatabaseName = "nGSWY8FyYM";

//Define your database username here.
$HostUser = "nGSWY8FyYM";

//Define your database password here.
$HostPass = "g2u3TwKrwN";
 
// Connecting to MySQL Database.
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 // Getting the received JSON into $json variable.
 $json = file_get_contents('php://input');
 
 // decoding the received JSON and store into $obj variable.
 $obj = json_decode($json,true);
 
 // Populate pegawai ID from JSON $obj array and store into $S_ID.
 $S_ID = $obj['pegawai_id'];
 
 // Creating SQL query and Updating the current record into MySQL database table.
 $Sql_Query = "DELETE FROM pegawai WHERE pegawai_id = '$S_ID'" ;
 
 
 if(mysqli_query($con,$Sql_Query)){
 
 // If the record inserted successfully then show the message.
$MSG = 'Record Deleted Successfully.' ;
 
// Converting the message into JSON format.
$json = json_encode($MSG);
 
// Echo the message.
 echo $json ;
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>